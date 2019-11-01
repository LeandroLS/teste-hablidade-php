FROM php:7.2-apache
EXPOSE 80
RUN docker-php-ext-install pdo_mysql pdo
COPY . /var/www/html