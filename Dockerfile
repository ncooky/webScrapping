FROM ncooky/nginx-lumen
MAINTAINER nugraha saputra <nugraha.saputra@gmail.com>
WORKDIR /var/www/lumen

# Copy app files into app folder
COPY . /var/www/lumen

EXPOSE 80