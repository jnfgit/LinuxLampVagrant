export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get install -y mysql-server
sudo apt-get -y install libapache2-mod-php5 php5-mysql