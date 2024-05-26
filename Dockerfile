# Dockerfile
FROM php:7.4-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Install composer (optional, if you use it)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the local source code to the container
COPY . /var/www/html

# Install Xdebug for live updating (optional)
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Set permissions
RUN chown -R www-data:www-data /var/www/html
