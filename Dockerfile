FROM php:8.1.0-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

RUN apt-get update -y && apt-get install -y \ 
                        libicu-dev \
                        unzip zip \
                        libmariadb-dev \
                        libpng-dev \
                        libjpeg-dev \
                        libfreetype6-dev\
                        libjpeg62-turbo-dev

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install gettext intl pdo_mysql gd zip

RUN pecl install -o -f xdebug \
    && docker-php-ext-enable xdebug

COPY ./php.ini /usr/local/etc/php/

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd