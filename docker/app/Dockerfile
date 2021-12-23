FROM php:8.0-fpm-buster

COPY php.ini /user/local/etc/php/

RUN apt update
RUN apt install -y wget git unzip libpq-dev

# Set env
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install PHP Extensions
RUN apt install -y zlib1g-dev mariadb-client libzip-dev libonig-dev \
    && docker-php-ext-install zip pdo_mysql

COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

WORKDIR /var/www/src
