This is test.

# Requirements
- PHP5.6
```
# yum -y install epel-release
# rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
# yum -y install --enablerepo=remi,remi-php56 php php-common

$ php -v                                                                                                                                で [/var/www/apps/test-codeigniter]+[master]
PHP 5.6.34 (cli) (built: Feb 28 2018 10:16:58) 
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
```

- Apache2.4
```
# yum -y install httpd
```

- Postgres9.2
```
# yum -y install postgresql-server
# postgresql-setup initdb
```

- composer
```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ mv composer.phar /usr/local/bin/composer
```

# Usage

## git clone
- `git clone`
- `ln -s "index.php", ".htaccess"`
## Apache　Setting
- Edit　/etc/hosts (ドメインの追加)
- Edit httpd.conf (mod_rewriteの許可)

## SELinux

## Postgres
- restore



