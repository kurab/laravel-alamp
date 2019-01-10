#!/usr/bin/env bash

mkdir /etc/httpd/conf.d/vhosts
chmod -R 0755 /etc/httpd/conf.d/vhosts
echo "IncludeOptional conf.d/vhosts/*.conf" >> /etc/httpd/conf/httpd.conf

cat <<EOF > /etc/httpd/conf.d/vhosts/dev.conf
<VirtualHost *:80>
    ServerName laravel-dev.lifull-tech.vn
    DocumentRoot /var/www/html/public

    ErrorLog /var/log/httpd/dev.error.log
    CustomLog /var/log/httpd/dev.access.log combined

    <Directory "/var/www/html/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF

