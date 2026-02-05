FROM php:8.2-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /data /var/wwww/html
EXPOSE 80
CMD ["apache2-foreground"]
