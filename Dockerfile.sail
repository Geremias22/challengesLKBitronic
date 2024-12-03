FROM laravelsail/php82-composer as base

LABEL maintainer="Laravel Sail"

# Instalar la extensión OpenSSL y otras dependencias necesarias
RUN apt-get update && apt-get install -y \
    libssl-dev \
    && docker-php-ext-install openssl