#!/bin/sh

cd /tmp

wget http://dev.mysql.com/get/mysql-apt-config_0.7.3-1_all.deb

sudo dpkg -i mysql-apt-config_0.7.3-1_all.deb

sudo apt-get update -y

sudo apt-get install -y apache2 mysql-community-server libapache2-mod-auth-mysql php5-mysql

sudo apt-get install -y php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-cli php5-gd
