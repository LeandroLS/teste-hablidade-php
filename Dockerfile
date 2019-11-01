FROM php:7.2-apache
EXPOSE 80
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html