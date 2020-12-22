USER=$(shell id -u)
GROUP=$(shell id -g)

DC=USER_ID=$(USER) GROUP_ID=$(GROUP) docker-compose
DCDevFile=docker-compose.dev.yml
DCDefaultFile=docker-compose.yml
DE=docker-compose exec
DC-DEV=$(DC) -f $(DCDefaultFile) -f $(DCDevFile)
COMPOSER=$(DE) php composer

prod: create-dist build
	$(DC) -f $(DCDefaultFile) up

build-dev:
	$(DC-DEV) build

dev: create-dist build-dev
	$(DC-DEV) up

build:
	$(DC) -f $(DCDefaultFile) build

create-dist:
	mkdir dist
