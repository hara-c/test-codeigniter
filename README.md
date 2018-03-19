This is test.

# Requirements
- PHP5.6
```
$ wget http://jp2.php.net/get/php-5.6.34.tar.gz/from/jp.php.net/mirror -O php-5.6.34.tar.gz
$ tar xvzf php-5.6.34.tar.gz
$ cd php-5.6.34
$ ./configure --with-apxs2 --enable-mbstring --enable-zend-multibyte --with-pgsql 
$ make
$ make install

# php.ini を用意
$ mv ./php.ini-development /usr/local/lib/php.ini   
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
- Edit httpd.conf (mod_rewriteの許可 / Document Root の変更/　PHP利用の設定)

## SELinux

## Postgres
- restore



