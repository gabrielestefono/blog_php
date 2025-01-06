# Usar a imagem oficial do PHP 7.4 com Apache
# Localização do arquivo _root_/Docker/project
FROM php:7.4-apache

# Atualizar pacotes, instalar dependências e extensões PHP
RUN apt-get update && \
    apt-get install -y curl libonig-dev libpq-dev libxml2-dev unzip && \
    docker-php-ext-install pdo pdo_mysql mysqli && \
    a2enmod ssl rewrite && \
    apt-get clean && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar configuração do Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

# Expor a porta 80
EXPOSE 80
