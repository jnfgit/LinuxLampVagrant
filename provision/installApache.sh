apt-get update
apt-get install -y apache2
if ! [ -L /var/www ]; then
  rm -rf /var/www/html
  ln -fs /vagrant /var/www/html
fi