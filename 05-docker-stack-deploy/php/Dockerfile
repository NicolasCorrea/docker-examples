FROM php:rc-apache
RUN apt-get update 
RUN apt-get install -y git
RUN apt-get install -y zlib1g*
RUN apt-get install -y libzip*
RUN apt-get install -y libpng*
RUN docker-php-ext-install pdo_mysql zip gd
RUN a2enmod rewrite
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin/ --filename=composer
EXPOSE 80