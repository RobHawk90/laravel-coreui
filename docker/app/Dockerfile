FROM php:7.4-fpm

# arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update && apt-get install -y apt-utils

# install required packages
RUN apt-get update && apt-get install -y \
    curl \
    git \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    nano \
    unzip \
    zip \
    # image optimizers
    gifsicle\
    jpegoptim \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    optipng \
    pngquant

# install PHP extensions
RUN docker-php-ext-install \
    bcmath \
    exif \
    mbstring \
    pcntl \
    pdo_pgsql \
    zip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# install Node.js v12
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash \
    && apt-get install -y nodejs

# install xdebug for application debug and code coverage
RUN pecl install xdebug

# install image optmizer for node
RUN npm install -g svgo

# clear files
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# create system user to run Composer and Artisan commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www

USER $user
