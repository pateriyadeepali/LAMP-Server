# Use the official PHP with Apache image
FROM php:8.1-apache

# Copy application code to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set up the correct permissions for the application directory
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configure Apache to allow access to the directory
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    echo "<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>" >> /etc/apache2/apache2.conf

# Ensure Apache virtual host is set correctly to serve from /var/www/html
RUN echo "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    </VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite and other necessary Apache modules
RUN a2enmod rewrite

# Expose port 80 to access the web application
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
