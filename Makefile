USER=$(shell id -u)
GROUP=$(shell id -g)

DC=USER_ID=$(USER) GROUP_ID=$(GROUP) docker-compose
DCDevFile=docker-compose.dev.yml
DCDefaultFile=docker-compose.yml
DE=docker-compose exec
DC-DEV=$(DC) -f $(DCDefaultFile) -f $(DCDevFile)
COMPOSER=$(DE) php composer

default: build
	$(DC) -f $(DCDefaultFile) up

build-dev:
	$(DC-DEV) build

dev: build-dev
	$(DC-DEV) up

build:
	$(DC) -f $(DCDefaultFile) build

