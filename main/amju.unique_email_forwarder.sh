#!/bin/bash
# /home/amjubygt/amju.unique_email_forwarder.sh

# Configuration
MAX_EMAILS_PER_RUN=30
BATCH_DELAY=30
LOG_FILE="/home/amjubygt/amju.unique_email_forwarder.log"
DEST_EMAILS=("uchechukwu.ogelle@amjuuniquemfbng.com" "emmanuel.ogbeide@amjuuniquemfbng.com")

# Mail directory paths
MAIL_DIR="/home/amjubygt/mail"
NEW_DIR="$MAIL_DIR/new"
CUR_DIR="$MAIL_DIR/cur"

# Log function
log() {
    echo "$(date '+%Y-%m-%d %H:%M:%S') - $1" >> "$LOG_FILE"
}

# Check available mail commands
find_mail_command() {
    # Try different mail commands
    for cmd in /usr/sbin/sendmail /usr/sbin/exim /usr/bin/mail /usr/sbin/ssmtp /usr/lib/sendmail; do
        if [ -x "$cmd" ]; then
            echo "$cmd"
            return 0
        fi
    done

    # If no system mail command found, check if we can use PHP's mail()
    if which php >/dev/null 2>&1; then
        echo "php_mail"
        return 0
    fi

    return 1
}

# Extract the From address from email headers
extract_from_address() {
    local email_file=$1

    # Extract the From header
    local from_header=$(grep -i '^From:' "$email_file" | head -1)

    # Extract email address from From header
    local from_address=$(echo "$from_header" | sed -n 's/^From:[[:space:]]*//pi' | sed -n 's/.*<\([^>]*\)>.*/\1/p')

    # If no angle brackets format, try to extract email directly
    if [ -z "$from_address" ]; then
        from_address=$(echo "$from_header" | sed -n 's/^From:[[:space:]]*//pi' | grep -o '[A-Za-z0-9._%+-]*@[A-Za-z0-9.-]*\.[A-Za-z]*')
    fi

    # If still no address found, use a default
    if [ -z "$from_address" ]; then
        from_address="amju.unique@amjuuniquemfbng.com"
        log "WARNING: Could not extract From address, using default: $from_address"
    else
        log "Extracted From address: $from_address"
    fi

    echo "$from_address"
}

# Extract the Date header from email
extract_date_header() {
    local email_file=$1

    local date_header=$(grep -i '^Date:' "$email_file" | head -1)
    if [ -n "$date_header" ]; then
        echo "$date_header"
    else
        echo ""
    fi
}

# Send email using the detected mail command
send_email_with_command() {
    local mail_cmd="$1"
    local from_address="$2"
    local dest_email="$3"
    local email_content="$4"

    case "$mail_cmd" in
        /usr/sbin/sendmail|/usr/sbin/exim|/usr/lib/sendmail)
            # Use system MTA with original sender
            echo "$email_content" | $mail_cmd -f "$from_address" "$dest_email" 2>> "$LOG_FILE"
            return $?
            ;;
        /usr/bin/mail)
            # Use mail command (may not support -f parameter well)
            local subject=$(echo "$email_content" | grep -i '^Subject:' | head -1 | sed 's/^Subject: //I')
            echo "$email_content" | mail -s "$subject" "$dest_email" 2>> "$LOG_FILE"
            return $?
            ;;
        "php_mail")
            # Use PHP's mail function
            local php_script="/home/amjubygt/send_email.php"
            cat > "$php_script" << EOF
<?php
\$email_content = <<<EOT
$email_content
EOT;

\$to = "$dest_email";
\$subject = 'Forwarded Email';

// Extract subject from email if possible
if (preg_match('/^Subject:\s*(.*)$/im', \$email_content, \$matches)) {
    \$subject = trim(\$matches[1]);
}

\$headers = [
    'From: $from_address',
    'Content-Type: text/plain; charset=utf-8'
];

if (mail(\$to, \$subject, \$email_content, implode("\\r\\n", \$headers))) {
    exit(0);
} else {
    exit(1);
}
?>
EOF
            php "$php_script" 2>> "$LOG_FILE"
            local result=$?
            rm -f "$php_script"
            return $result
            ;;
        *)
            log "ERROR: Unsupported mail command: $mail_cmd"
            return 1
            ;;
    esac
}

# Simple version that passes through the original email with correct sender
forward_email_simple() {
    local email_file=$1
    local mail_cmd="$2"
    local success_count=0

    # Extract the original From address
    local original_from=$(extract_from_address "$email_file")
    local email_content=$(cat "$email_file")

    for dest_email in "${DEST_EMAILS[@]}"; do
        log "Forwarding to: $dest_email using sender: $original_from with command: $mail_cmd"

        # Use the original From address as sender
        if send_email_with_command "$mail_cmd" "$original_from" "$dest_email" "$email_content"; then
            ((success_count++))
            log "Successfully forwarded to $dest_email"
        else
            log "ERROR: Failed to forward to $dest_email"
        fi
        sleep 2
    done

    if [ $success_count -eq ${#DEST_EMAILS[@]} ]; then
        return 0
    else
        return 1
    fi
}

# Advanced version that reconstructs headers better
forward_email_advanced() {
    local email_file=$1
    local mail_cmd="$2"
    local success_count=0

    # Extract original headers
    local original_from=$(extract_from_address "$email_file")
    local original_date=$(extract_date_header "$email_file")

    # Create a temporary file for the reconstructed email
    local temp_file="/tmp/email_advanced_$$.eml"

    # Extract the body (everything after first empty line)
    local body_start=$(grep -n '^$' "$email_file" | head -1 | cut -d: -f1)
    if [ -n "$body_start" ]; then
        local headers=$(head -n $((body_start - 1)) "$email_file")
        local body=$(tail -n +$((body_start + 1)) "$email_file")
    else
        # If no empty line, treat everything as headers
        local headers=$(cat "$email_file")
        local body=""
    fi

    # Filter out problematic headers
    local filtered_headers=$(echo "$headers" | grep -v -i -e '^To:' -e '^Received:' -e '^Return-Path:' -e '^Delivered-To:' -e '^Envelope-to:' -e '^Delivery-date:')

    # Reconstruct email with proper headers
    {
        # Preserve filtered headers
        echo "$filtered_headers"

        # Add proper To header
        echo "To: uchechukwu.ogelle@amjuuniquemfbng.com, emmanuel.ogbeide@amjuuniquemfbng.com"

        # Empty line separating headers from body
        echo ""

        # Email body
        echo "$body"
    } > "$temp_file"

    local reconstructed_content=$(cat "$temp_file")

    # Send the reconstructed email
    for dest_email in "${DEST_EMAILS[@]}"; do
        log "Sending reconstructed email to: $dest_email using sender: $original_from with command: $mail_cmd"

        if send_email_with_command "$mail_cmd" "$original_from" "$dest_email" "$reconstructed_content"; then
            ((success_count++))
            log "Successfully sent reconstructed email to $dest_email"
        else
            log "ERROR: Failed to send reconstructed email to $dest_email"
        fi
        sleep 2
    done

    rm -f "$temp_file"

    if [ $success_count -eq ${#DEST_EMAILS[@]} ]; then
        return 0
    else
        return 1
    fi
}

# Check if email is from amju.unique forwarder
is_from_amju_unique() {
    local email_file=$1

    if grep -q -E "(Delivered-To|X-Original-To|Envelope-to).*amju\.unique@amjuuniquemfbng\.com" "$email_file" 2>/dev/null; then
        return 0
    fi

    if grep -q -E "Delivered-To.*amjubygt@premium66.web-hosting.com" "$email_file" 2>/dev/null; then
        return 0
    fi

    if grep -q -E "(From:.*fidelitybank|Subject:.*Transaction)" "$email_file" 2>/dev/null; then
        return 0
    fi

    return 1
}

# Process emails from directory
process_emails() {
    local dir=$1
    local mail_cmd="$2"
    local count=0
    local skipped_count=0
    local success_count=0
    local fail_count=0

    log "Processing directory: $dir using mail command: $mail_cmd"

    # Process emails sorted by modification time (oldest first)
    find "$dir" -type f -name "*" -printf "%T@ %p\n" | sort -n | cut -d' ' -f2- | head -$((MAX_EMAILS_PER_RUN * 2)) | while read email_file; do

        # Stop if we've processed our max
        if [ $count -ge $MAX_EMAILS_PER_RUN ]; then
            break
        fi

        # Check if this email is from amju.unique forwarder
        if ! is_from_amju_unique "$email_file"; then
            ((skipped_count++))
            if [ "$dir" = "$NEW_DIR" ]; then
                mv "$email_file" "$CUR_DIR/" 2>/dev/null
            fi
            continue
        fi

        log "Processing amju.unique email: $(basename "$email_file")"
        ((count++))

        # Extract and log the original sender for debugging
        local original_sender=$(extract_from_address "$email_file")
        log "Original sender: $original_sender"

        # Try the simple forwarding method first
        if forward_email_simple "$email_file" "$mail_cmd"; then
            rm -f "$email_file"
            log "Successfully processed and deleted: $(basename "$email_file")"
            ((success_count++))
        else
            # Fallback to advanced method if simple fails
            log "Simple method failed, trying advanced method..."
            if forward_email_advanced "$email_file" "$mail_cmd"; then
                rm -f "$email_file"
                log "Successfully processed with advanced method: $(basename "$email_file")"
                ((success_count++))
            else
                log "All methods failed: $(basename "$email_file") - keeping for retry"
                if [ "$dir" = "$NEW_DIR" ]; then
                    mv "$email_file" "$CUR_DIR/" 2>/dev/null
                fi
                ((fail_count++))
            fi
        fi

        # Delay between emails
        if [ $count -lt $MAX_EMAILS_PER_RUN ]; then
            sleep $BATCH_DELAY
        fi
    done

    log "Results from $dir: $success_count succeeded, $fail_count failed, $skipped_count skipped"
    return $success_count
}

# Main execution
log "=== Starting dual email forwarding ==="

# Ensure directories exist
mkdir -p "$NEW_DIR" "$CUR_DIR"

# Find available mail command
MAIL_CMD=$(find_mail_command)
if [ -z "$MAIL_CMD" ]; then
    log "ERROR: No mail command available - cannot process emails"
    exit 1
fi

log "Detected mail command: $MAIL_CMD"

# Count emails before processing
new_count=$(find "$NEW_DIR" -type f | wc -l)
cur_count=$(find "$CUR_DIR" -type f | wc -l)
log "Queue status: $new_count new, $cur_count cur emails total"

# Process new emails first, then cur
process_emails "$NEW_DIR" "$MAIL_CMD"
process_emails "$CUR_DIR" "$MAIL_CMD"

log "=== Dual email forwarding completed ==="
