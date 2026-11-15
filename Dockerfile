# PortoAzka — Laravel 13 (PHP 8.3) for Railway
# Build frontend with Node, install PHP deps with Composer, serve via Apache.

# ---------- Stage 1: frontend assets ----------
FROM node:20-bookworm-slim AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci --ignore-scripts
COPY resources ./resources
COPY vite.config.js ./
COPY public ./public
RUN npm run build

# ---------- Stage 2: PHP dependencies ----------
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist
COPY app ./app
COPY bootstrap ./bootstrap
COPY config ./config
COPY database ./database
COPY public ./public
COPY resources ./resources
COPY routes ./routes
COPY artisan ./
RUN composer dump-autoload --optimize --no-dev

# ---------- Stage 3: runtime ----------
FROM php:8.3-apache

# System deps + PHP extensions Laravel needs (incl. sqlite)
RUN apt-get update && apt-get install -y --no-install-recommends \
        libsqlite3-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        libicu-dev \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_sqlite sqlite3 mbstring xml bcmath intl zip gd pcntl \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Apache serves Laravel's public dir
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY --from=vendor /app /var/www/html
COPY --from=frontend /app/public/build ./public/build

# Permissions for Laravel writable dirs
RUN mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database \
 && touch database/database.sqlite \
 && chown -R www-data:www-data storage bootstrap/cache database \
 && chmod -R 775 storage bootstrap/cache

EXPOSE 80

# Railway injects $PORT: listen on it, run migrations, cache config, start Apache.
CMD bash -c "sed -i \"s/Listen 80/Listen ${PORT:-80}/g\" /etc/apache2/ports.conf && sed -i \"s/:80>/:${PORT:-80}>/g\" /etc/apache2/sites-enabled/000-default.conf && touch database/database.sqlite && chown www-data:www-data database/database.sqlite && php artisan migrate --force && php artisan config:cache && php artisan route:cache && apache2-foreground"
