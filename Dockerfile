FROM php:8.2-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/wwww/html
EXPOSE 8080
CMD ["apache2-foreground"]
