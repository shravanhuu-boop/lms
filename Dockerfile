FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
