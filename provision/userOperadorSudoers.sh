useradd -m operador
sudo echo operador:password | chpasswd
sudo echo "operador    ALL=(ALL:ALL) ALL" >> /etc/sudoers