FROM php:rc-apache
ENV ENV_PRODUCTION=TRUE
RUN apt-get update
RUN apt-get install --assume-yes git
RUN php -r  "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"
COPY ./app/ /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN service apache2 restart
RUN composer install --no-progress