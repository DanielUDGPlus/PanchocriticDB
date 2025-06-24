# Usa imagen oficial con Apache + PHP 8.1
FROM php:8.1-apache

# Habilita extensiones necesarias de PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Copia todo tu proyecto al servidor
COPY . /var/www/html/

# Asegura permisos adecuados (puedes ajustar si usas uploads)
RUN chmod -R 755 /var/www/html/
