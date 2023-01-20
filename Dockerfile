FROM php:8.0-apache

RUN apt-get update \
    && apt-get install icu-devtools libicu-dev libxml2-dev \
    && pecl install -f xmlrpc-1.0.0RC3 \
    && pecl install -f xdebug

RUN docker-php-ext-enable xmlrpc \
    && docker-php-ext-enable xdebug
