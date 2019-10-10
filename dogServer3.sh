#!/bin/bash
yum install -y httpd php git

cd /var/www/html
sudo su
wget https://raw.githubusercontent.com/RaguRJ/AWS_base_architecture/master/dog3.JPG
mv dog3.JPG dog.jpg
wget https://raw.githubusercontent.com/RaguRJ/AWS_base_architecture/master/index.php
wget https://raw.githubusercontent.com/RaguRJ/AWS_base_architecture/master/htaccess
mv /var/www/html/htaccess /var/www/html/.htaccess

mkdir /var/www/html/dog
cp /var/www/html/dog.jpg /var/www/html/dog
cp /var/www/html/index.php /var/www/html/dog
cp /var/www/html/.htaccess /var/www/html/dog


sudo systemctl start httpd
sudo systemctl enable httpd
sudo usermod -a -G apache ec2-user
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
