FROM mysql:5.7

WORKDIR /var/lib/mysql/

ENV MYSQL_ROOT_PASSWORD=muitodoida123

ENV MYSQL_DATABASE=app_bd

ADD init.sql /docker-entrypoint-initdb.d

EXPOSE 3306
