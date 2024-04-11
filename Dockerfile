FROM php:8.3-fpm

WORKDIR /var/www/html
RUN apt-get update
RUN apt-get install -y curl

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000"]
