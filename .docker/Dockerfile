FROM php:7.1.3-apache

RUN apt-get update && apt-get install -my wget mysql-client
# Install PHP extensions
RUN apt-get update && apt-get install -y \
      libmcrypt-dev \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install \
      mbstring \
      mcrypt \
      pdo_mysql


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Put apache config for Laravel
COPY apache2-laravel.conf /etc/apache2/sites-available/laravel.conf
RUN a2dissite 000-default.conf && a2ensite laravel.conf && a2enmod rewrite

# Change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#RUN service apache2 restart

WORKDIR /var/www/html

USER root