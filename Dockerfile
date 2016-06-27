FROM php:7-apache
MAINTAINER FluxoTI <lucas.gois@fluxoti.com>

COPY . /var/www/html
RUN apt-get update -y && apt-get install -y libpq-dev && docker-php-ext-install pdo_pgsql