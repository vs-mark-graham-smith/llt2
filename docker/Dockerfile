FROM php:7.4-apache
WORKDIR /var/www

# Install dependencies.
RUN apt-get update && apt-get install -y git \
    curl \
    libfreetype6-dev \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear Cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP Extensions and Composer
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) calendar pdo_mysql mbstring exif pcntl bcmath gd
COPY --from=composer:latest /usr/bin/composer /usr/bin

RUN a2enmod rewrite
COPY ./docker/apache2.conf /etc/apache2/sites-enabled/000-default.conf