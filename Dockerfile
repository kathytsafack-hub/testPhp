FROM php:8.2-apache

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 8080
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]