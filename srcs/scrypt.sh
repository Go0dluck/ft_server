openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj '/CN=ksharee'
service php7.3-fpm start
service mysql start
echo "CREATE DATABASE ft_server;" | mysql
echo "grant all on ft_server.* to 'admin'@'localhost' identified by 'admin';" | mysql
echo "flush privileges" | mysql
service nginx start
bash
