# Usar a imagem oficial do PHP 7.4 com Apache
# localização do arquivo _root_/Docker/project
FROM php:7.4-apache

# Habilitar módulos do Apache e instalar extensões PHP
RUN apt-get update && \
    apt-get install -y curl unzip && \
    docker-php-ext-install mysqli && \
    a2enmod ssl rewrite && \
    apt-get clean && \ 
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar configuração do Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf