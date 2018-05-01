FROM php:7.1
RUN apt update -y && apt-get install -y openssl zip unzip git
RUN apt install mysql-server
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan key:generate
CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
