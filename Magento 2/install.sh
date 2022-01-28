#!/bin/bash
tar -xvzf  magento-ce-2.4.3_sample_data-2021-08-06-11-08-46.tar.gz 
chmod 777 -R ../243magento
chown root:root ../243magento
mysql -ui95dev  -p -e "create database 243magento"; 

bin/magento setup:install --base-url=http://localhost/243magento  --db-host=localhost --db-name=243magento --db-user=i95dev  --db-password=i95dev  --admin-firstname=Azhar --admin-lastname=Shaik --admin-email=azharuddin.shaik@jivainfotech.com  --admin-user=admin --admin-password=i95devteam --search-engine=elasticsearch7 --elasticsearch-host="localhost" --elasticsearch-port=9200

bin/magento module:disable Magento_TwoFactorAuth
php bin/magento setup:store-config:set --base-url="http://243magento.com"
chmod 777 -R ../243magento
chown root:root ../243magento

echo '<VirtualHost *:80>
     ServerAdmin admin@cybr-magento.com
     DocumentRoot /var/www/html/243magento/pub
     ServerName 243magento.com
     ServerAlias www.243magento.com

     <Directory /var/www/html/243magento/pub>
        Options +FollowSymlinks
        AllowOverride All
        Require all granted
     </Directory>

     ErrorLog ${APACHE_LOG_DIR}/error.log
     CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>' > /etc/apache2/sites-available/243magento.conf



sudo a2ensite 243magento.conf
sudo a2enmod rewrite
service apache2 restart
