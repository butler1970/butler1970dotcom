#!/bin/bash

docker container rm butler1970dotcom-laravel.test-1
docker container rm butler1970dotcom-selenium-1
docker container rm butler1970dotcom-redis-1
docker container rm butler1970dotcom-mysql-1
docker container rm butler1970dotcom-mailpit-1
docker container rm butler1970dotcom-meilisearch-1

docker image rm sail-8.2/app:latest
docker image rm axllent/mailpit:latest
docker image rm redis:alpine
docker image rm selenium/standalone-chrome:latest
docker image rm composer:latest
docker image rm getmeili/meilisearch:latest
docker image rm mysql/mysql-server:8.0
