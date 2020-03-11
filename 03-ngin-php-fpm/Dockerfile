FROM php:7.2-apache
ENV ENV_PRODUCTION TRUE
#Install git
RUN apt-get update \
    && apt-get install -y git \
    && apt-get install -y \
    zlib1g* \
    libzip* \
    libpng*
RUN docker-php-ext-install pdo pdo_mysql zip gd
RUN a2enmod rewrite
#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin/ --filename=composer
COPY ./app/ /var/www/html/
RUN composer install -q
# RUN vendor/bin/phinx migrate -e production
# RUN vendor/bin/phinx seed:run -e production
EXPOSE 80