FROM php:7.2-apache
COPY . C:\wamp64\www\Valorant
WORKDIR C:\wamp64\www\Valorant
EXPOSE 3000
CMD [ "php", "./index.php" ]
