# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Expone el puerto 80 para el tráfico web
RUN a2enmod rewrite

# Copia los archivos de la aplicación al directorio del servidor web
COPY ./ /var/www/html/

# Inicia el servidor Apache cuando el contenedor se ejecute 
CMD ["apache2-foreground"]