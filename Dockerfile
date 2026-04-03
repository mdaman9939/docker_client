FROM php:8.2-apache

# Enable Apache modules needed for rewrite and headers
RUN a2enmod rewrite headers

# Install PHP extensions (curl is needed for proxy.php)
RUN apt-get update && \
    apt-get install -y --no-install-recommends libcurl4-openssl-dev && \
    docker-php-ext-install curl mysqli pdo_mysql && \
    rm -rf /var/lib/apt/lists/*

# Set correct timezone (India)
RUN echo "date.timezone = Asia/Kolkata" > /usr/local/etc/php/conf.d/timezone.ini

# Create default Apache config if not exists
RUN echo '<VirtualHost *:80>\n\
    ServerAdmin webmaster@localhost\n\
    DocumentRoot /var/www/html\n\
    <Directory /var/www/html>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Create .htaccess for routing
RUN echo 'RewriteEngine On\n\
RewriteCond %{REQUEST_FILENAME} !-f\n\
RewriteCond %{REQUEST_FILENAME} !-d\n\
RewriteRule ^ index.php [QSA,L]\n\
Header set X-Content-Type-Options "nosniff"\n\
Header set X-Frame-Options "DENY"' > /var/www/html/.htaccess

# Copy application code
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]