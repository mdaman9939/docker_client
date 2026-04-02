FROM php:8.2-apache

# Enable Apache modules needed for rewrite and proxy
RUN a2enmod rewrite headers

# Install PHP extensions (curl is needed for proxy.php)
RUN apt-get update && \
    apt-get install -y --no-install-recommends libcurl4-openssl-dev && \
    docker-php-ext-install curl && \
    rm -rf /var/lib/apt/lists/*

# Copy custom Apache vhost config
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy application code
COPY . /var/www/html/

# Use Docker-specific .htaccess (paths differ from WAMP)
COPY docker/.htaccess /var/www/html/.htaccess

# Remove Docker-specific files from the served directory
RUN rm -rf /var/www/html/docker /var/www/html/Dockerfile

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Apache runs as www-data by default
CMD ["apache2-foreground"]
