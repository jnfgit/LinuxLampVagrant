export DEBIAN_FRONTEND=noninteractive
sudo apt-get -y install libapache2-mod-php5 php5 php5-mysql php5-gd sed
#wget http://wordpress.org/latest.tar.gz
#tar xzvf latest.tar.gz
sudo apt-get update
#cd /wordpress
#cp wp-config-sample.php wp-config.php
sudo systemctl restart apache2
