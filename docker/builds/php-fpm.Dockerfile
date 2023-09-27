FROM php:8.2.10-fpm

# Instalar dependencias do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões php fundamentais
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd


WORKDIR /var/www

# Atualiza as permissões para funcionar bem com o Nginx
RUN chown -R 33:33 /var/www

EXPOSE 9000
