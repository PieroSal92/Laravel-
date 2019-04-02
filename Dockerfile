FROM php:7.2
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl git zip unzip
RUN docker-php-ext-install pdo mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000