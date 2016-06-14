#!/bin/bash
#ORIGEN='/var/cache/apt/archives/restore/'
export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get install -y mysql-server
#sudo apt-get -y install libapache2-mod-php5 php5 php5-mysql php5-gd sed

# configuramos la ip donde escuchara MySQL, esta es la ip publica que pusimos en vagrantfile.
sudo sed -i 's/127.0.0.1/10.0.0.211/g' "/etc/mysql/my.cnf"
sudo systemctl restart mysql

# Configura mysql y DB
#mysqladmin -u root password password
#mysql -u root -ppassword -e "CREATE DATABASE IF NOT EXISTS my_wp;"
mysql -u root -e "CREATE DATABASE IF NOT EXISTS my_wp;"
#mysql -u root -e "CREATE USER 'wpuser'@'localhost' identified by '1234';"
mysql -u root -e "CREATE USER 'wpuser'@'10.0.0.210' identified by '1234';"
#mysql -u root -e "GRANT ALL PRIVILEGES ON my_wp.* TO 'wpuser'@'localhost' IDENTIFIED BY '1234';"
mysql -u root -e "GRANT ALL PRIVILEGES ON my_wp.* TO 'wpuser'@'10.0.0.210' IDENTIFIED BY '1234';"
mysql -u root -e "flush privileges;"
#mysql -u root -ppassword my_wp < $ORIGEN/my_wp.sql