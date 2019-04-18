FROM php:7.2
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl git zip unzip
RUN docker-php-ext-install pdo mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000

RUN apt-get update
RUN apt-get install -y software-properties-common python-software-properties
RUN apt-get install -y language-pack-en-base
RUN LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php

# setup php
RUN apt-get update && \
    apt-get install -y nginx \
    php7.2\
    php7.2-fpm \
    php7.2-cli \
    php7.2-common \
    php7.2-json \
    php7.2-opcache \
    php7.2-mysql \
    php7.2-mbstring \
    php7.2-gd \
    php7.2-imap \
    php7.2-ldap \
    php7.2-dev \
    php7.2-intl \
    php7.2-gd \
    php7.2-curl \
    php7.2-zip \
    php7.2-xml \
    curl

RUN phpenmod pdo_mysql

EXPOSE 8000

ENTRYPOINT ["/bin/sh", "./entrypoint.sh"]