FROM debian:buster

RUN apt-get upgrade
RUN apt-get update
RUN apt-get -y install nginx
RUN apt-get -y install curl
RUN apt-get -y install mariadb-server
RUN apt-get -y install php-fpm php-mysql php-mbstring
RUN wget https://ru.wordpress.org/latest-ru_RU.tar.gz
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN tar -xvzf latest-ru_RU.tar.gz && tar -xvzf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN rm -f latest-ru_RU.tar.gz && rm -f phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mv wordpress var/www/html && mv phpMyAdmin-5.0.4-all-languages var/www/html/phpmyadmin
RUN mv var/www/html/phpmyadmin/config.sample.inc.php var/www/html/phpmyadmin/config.inc.php
RUN mkdir srcs
RUN mkdir /etc/nginx/ssl

COPY srcs/scrypt.sh /srcs
COPY srcs/autoindexon.sh /srcs
COPY srcs/autoindexoff.sh /srcs
COPY srcs/wp-config.php /var/www/html/wordpress
COPY srcs/default /etc/nginx/sites-available/default

RUN chmod 777 srcs/*
EXPOSE 80 443
CMD bash srcs/scrypt.sh
