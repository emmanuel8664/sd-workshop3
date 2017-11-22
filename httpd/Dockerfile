# Comando para utilizar imagen publica de php, versión 7.0-apache
FROM php:7.0-apache

# Instalación de pdo_mysql para conectarse remotamente con paquetes
RUN docker-php-ext-install pdo pdo_mysql

# Se agrega el archivo "index.php"
ADD ./pages /var/www/html

# Se expone el puerto 80
EXPOSE 80

# Se inicia el servicio de apache2 para acceder a la pagina web desde un navegador
CMD service apache2 start && tail -f /var/log/apache2/access.log
