# Color definitions
GREEN=\033[1;32m
BLUE=\033[1;34m
RED=\033[1;31m
YELLOW=\033[1;33m
NC=\033[0m # No Color

OS := $(shell uname)

start_dev:
ifeq ($(OS),Darwin)
	@echo "Starting development environment for macOS..."
	@echo " "
	@echo " "
	docker volume create --name=amju-unique-app-sync
	docker-sync start
	@echo " "
	@echo " "
	@if ! docker-sync start; then \
		echo "${RED}Initialization failed! Retrying again..."; \
		docker-sync start; \
	fi
	export SAIL_XDEBUG_MODE=off

	./vendor/bin/sail up
else
	@echo "Starting development environment for other operating systems..."
	export SAIL_XDEBUG_MODE=off

	./vendor/bin/sail up
endif
	@echo " "
	@echo " "
	@echo "${GREEN}╔════════════════════════════════════════╗"
	@echo "    Project initialized successfully!    "
	@echo "╚════════════════════════════════════════╝${NC}"
	@echo " "
	@echo " "
	@echo "${GREEN}Access Project via${NC} ${YELLOW}http://localhost:8004${NC}"
	@echo " "
	@echo "${GREEN}Access Mailpit via${NC} ${YELLOW}http://localhost:8024${NC}"
	@echo " "
	@echo "${GREEN}Access MySQL at ${NC} ${YELLOW}port 3304${NC}"
	@echo " "
	@echo " "

stop_dev:           ## Stop the Docker containers
ifeq ($(OS),Darwin)
	./vendor/bin/sail stop

	@echo " "
	@echo " "
	@echo "Stopping docker-sync..."
	@docker-sync stop 2>/dev/null || echo "${GREEN}Clean: No sync process found${NC}"
	@echo " "
	@echo " "
else
	./vendor/bin/sail stop
endif
	@echo "${YELLOW}╔════════════════════════════════════════╗"
	@echo "   Project uninitialized successfully!    "
	@echo "╚════════════════════════════════════════╝${NC}"
	@echo " "
	@echo "To completely destroy data volume run ${RED}'make kill_dev'${NC}"
	@echo " "
	@echo " "

kill_dev:           ## Clean everything for a fresh start
ifeq ($(OS),Darwin)
	./vendor/bin/sail down -v
	docker-sync clean
else
	./vendor/bin/sail down -v
endif
