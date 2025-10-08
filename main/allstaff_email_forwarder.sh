#!/bin/bash
# allstaff_email_forwarder.sh

# Configuration
MAX_EMAILS_PER_RUN=2
BATCH_DELAY=5
LOG_FILE="/home/amjubygt/allstaff_email_forwarder.log"

# Allstaff mailbox directories (reading directly from allstaff account)
ALLSTAFF_MAIL_DIR="/home/amjubygt/mail/amjuuniquemfbng.com/allstaff"
ALLSTAFF_NEW_DIR="$ALLSTAFF_MAIL_DIR/new"
ALLSTAFF_CUR_DIR="$ALLSTAFF_MAIL_DIR/cur"
ALLSTAFF_PROCESSED_DIR="$ALLSTAFF_MAIL_DIR/.Processed"

# Log function
log() {
    echo "$(date '+%Y-%m-%d %H:%M:%S') - $1" >> "$LOG_FILE"
}

# Get staff emails using your one-liner
get_staff_emails() {
    find /home/amjubygt/mail -type d -name "*.*" -exec basename {} \; | \
    grep -E '^[a-z]+\.[a-z]+$' | \
    grep -v '^\.' | \
    grep -v '\.com' | \
    grep -v -i -e amju -e test -e email -e alert -e sample -e branch | \
    while read email; do echo "${email}@amjuuniquemfbng.com"; done
}

# Forward email to all staff
forward_to_staff() {
    local email_file="$1"
    local staff_emails="$2"

    # Extract original sender
    local original_from=$(grep -i '^From:' "$email_file" | head -1 | sed -n 's/^From:[[:space:]]*//pi')
    local from_address=$(echo "$original_from" | sed -n 's/.*<\([^>]*\)>.*/\1/p')

    if [ -z "$from_address" ]; then
        from_address=$(echo "$original_from" | grep -o '[A-Za-z0-9._%+-]*@[A-Za-z0-9.-]*\.[A-Za-z]*' | head -1)
    fi

    if [ -z "$from_address" ]; then
        from_address="allstaff@amjuuniquemfbng.com"
    fi

    log "Forwarding email from: $from_address to all staff"

    # Send to each staff member
    echo "$staff_emails" | while read staff_email; do
        if [ -n "$staff_email" ]; then
            if cat "$email_file" | /usr/sbin/sendmail -f "$from_address" "$staff_email" 2>> "$LOG_FILE"; then
                log "Successfully sent to: $staff_email"
            else
                log "ERROR: Failed to send to: $staff_email"
            fi
            sleep 1  # Small delay between recipients
        fi
    done
}

# Process emails from allstaff account
process_allstaff_emails() {
    local count=0

    # Get staff emails once (cached for this run)
    local staff_emails_list=$(get_staff_emails)
    local total_staff=$(echo "$staff_emails_list" | wc -l)

    log "Processing allstaff emails. Total staff: $total_staff"

    # Process emails from both new and cur directories
    for dir in "$ALLSTAFF_NEW_DIR" "$ALLSTAFF_CUR_DIR"; do
        [ ! -d "$dir" ] && continue

        find "$dir" -type f -name "*" -printf "%T@ %p\n" | sort -n | cut -d' ' -f2- | head -$((MAX_EMAILS_PER_RUN - count)) | while read email_file; do

            if [ $count -lt $MAX_EMAILS_PER_RUN ]; then
                log "Processing allstaff email: $(basename "$email_file")"

                # Forward to all staff
                forward_to_staff "$email_file" "$staff_emails_list"

                # Move to processed directory (preserves the email)
                mkdir -p "$ALLSTAFF_PROCESSED_DIR"
                mv "$email_file" "$ALLSTAFF_PROCESSED_DIR/" 2>/dev/null
                log "Moved to processed: $(basename "$email_file")"

                ((count++))

                # Delay between emails
                if [ $count -lt $MAX_EMAILS_PER_RUN ]; then
                    sleep $BATCH_DELAY
                fi
            fi
        done
    done

    log "Processed $count allstaff emails"
    return $count
}

# Main execution
log "=== Starting allstaff email forwarding ==="

# Ensure directories exist
mkdir -p "$ALLSTAFF_NEW_DIR" "$ALLSTAFF_CUR_DIR" "$ALLSTAFF_PROCESSED_DIR"

# Count emails before processing
new_count=$(find "$ALLSTAFF_NEW_DIR" -type f 2>/dev/null | wc -l)
cur_count=$(find "$ALLSTAFF_CUR_DIR" -type f 2>/dev/null | wc -l)
log "Queue status: $new_count new, $cur_count cur allstaff emails"

# Process emails
process_allstaff_emails

log "=== Allstaff email forwarding completed ==="
