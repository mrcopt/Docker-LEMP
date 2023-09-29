FROM php:8.1-fpm

# Install OS system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clean system cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP dependencies
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath intl gd

WORKDIR /var/www

# Set permissions to work with Nginx
RUN chown -R 33:33 /var/www

EXPOSE 9000