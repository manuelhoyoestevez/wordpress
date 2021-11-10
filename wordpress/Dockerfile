FROM mhedev/php:7.4.25

# Código de la aplicación
COPY . /var/www/html/

# Limpieza de ficheros
RUN rm -rf ./var ./vendor ./node_modules/ ./public/build/ ./public/bundles/ ./.php_cs.cache
RUN mkdir ./var
RUN mkdir ./var/log
RUN touch ./var/log/xdebug.log
RUN chown www-data:www-data ./var/log/xdebug.log
RUN chmod 666 ./var/log/xdebug.log

# Logs xdebug
RUN echo "xdebug.client_host=\${DOCKER_HOST}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
# Es necesario que el contenedor contenga la variable de entorno DOCKER_HOST, que representa la IP del cliente Xdebug.
# Normalmente toma el valor 172.17.0.1 en el fichero docker-compose.
# Se puede determinar su valor ejecutando 'ifconfig' y verificando la ip de la interfaz 'docker0'.
RUN echo "xdebug.log=\"/var/www/html/var/log/xdebug.log\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Exposición del puerto
EXPOSE 80
