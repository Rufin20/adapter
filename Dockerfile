##Pulls the base Ubuntu Image from Docker Hub
From ubuntu

##Install NGINX
RUN apt-get -y update && apt -y install nginx

##Install PHP
RUN apt-get -y install php php-cli php-fpm

##Copy Files
COPY default /etc/nginx/sites-available/default
COPY adapter/ /var/www/adapter/

##Expose port 80
EXPOSE 80/tcp

##Start nginx and php services
CMD service php7.4-fpm start && service nginx start && tail -f /dev/null
