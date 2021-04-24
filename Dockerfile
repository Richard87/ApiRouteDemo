ARG PHP_EXTENSIONS="pdo_sqlite sqlite3 xdebug"

FROM thecodingmachine/php:8.0.1-v4-slim-apache

ENV APACHE_DOCUMENT_ROOT=public/
WORKDIR /var/www/html

COPY composer.json composer.lock symfony.lock ./
RUN composer install

COPY . ./
RUN composer dump-autoload && php bin/console cache:warmup