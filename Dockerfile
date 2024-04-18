FROM php:8.3-fpm

WORKDIR /var/www
RUN apt-get update
RUN apt-get install -y curl

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug \
    && pecl install redis \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-enable redis

EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000"]
