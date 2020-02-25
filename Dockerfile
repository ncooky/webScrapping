FROM ncooky/nginx-lumen
MAINTAINER nugraha saputra <nugraha.saputra@gmail.com>
WORKDIR /var/www/lumen

# Copy app files into app folder
COPY . /var/www/lumen

RUN chmod 777 storage
RUN chmod 777 bootstrap/cache

EXPOSE 80