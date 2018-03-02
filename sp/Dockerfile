FROM lucidprogrammer/apache-php7-composer-pgsql-mysql:latest

ARG BUILD_SP_C=""
ENV SP_C=$BUILD_SP_C

ARG BUILD_SP_ST=""
ENV SP_ST=$BUILD_SP_ST

ARG BUILD_SP_L=""
ENV SP_L=$BUILD_SP_L

ARG BUILD_SP_O=""
ENV SP_O=$BUILD_SP_O

ARG BUILD_SP_CN=""
ENV SP_CN=$BUILD_SP_CN

ARG BUILD_SP_EMAIL=""
ENV SP_EMAIL=$BUILD_SP_EMAIL

RUN mkdir -p /var/www/html/cert && \
     openssl req \
        -new \
        -newkey rsa:2048 \
        -days 3652 \
        -nodes \
        -x509 \
        -subj "/C=$SP_C/ST=$SP_ST/L=$SP_L/O=$SP_O/CN=$SP_CN/emailAddress=$SP_EMAIL" \
        -keyout /var/www/html/cert/saml.key \
        -out /var/www/html/cert/saml.crt

RUN echo "Alias /saml /var/www/html/vendor/simplesamlphp/simplesamlphp/www" >> /etc/apache2/apache2.conf
RUN echo "<Directory \"/var/www/html/vendor/simplesamlphp/simplesamlphp/www/\"> \n Options Indexes FollowSymLinks \n AllowOverride all \n Require all granted \n   </Directory>" >> /etc/apache2/apache2.conf
