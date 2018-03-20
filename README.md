
CodeIgniter2を使った、仮想アプリケーション開発。

OSは**CentOS7**

# Requirements

## Apache2.4

- インストール
```
# yum -y install httpd
```
- 設定を編集する
  - `/etc/httpd/conf/httpd.conf`に下記を追加
```
# ドキュメントルートを変更
# /var/www/apps/test-codeigniter をドキュメントルートにする

# DocumentRoot "/var/www/html"  ←　コメントアウト
DocumentRoot "/var/www/apps/test-codeigniter"　←　追加 

# mod_rewriteの許可
# /var/www/以下のAllowOverrideを許可する
<Directory "/var/www">↲
#    AllowOverride None　←　コメントアウト
    AllowOverride All　←　追加↲
    ...
</Directory>
```
- `/etc/hosts`に下記を追加
```
127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4 test-codeigniter.com　←　末尾に`test-codeigniter`を追加
...
```
  

## PHP5.6
- インストールする
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

- Apacheの設定を編集する
-- `/etc/httpd/conf/httpd.conf`に下記を追加
```
<FilesMatch \.php$>
    SetHandler application/x-httpd-php
</FilesMatch>
```
##Postgres9.2
- インストール
```
# yum -y install postgresql-server
# postgresql-setup initdb
```
- 設定を編集する
  - `/var/lib/pgsql/data/pg_hba.conf `を編集する
```
# ローカルの全てのユーザに接続を許可する
# "local" is for Unix domain socket connections only
#local   all             all                                     peer　←　コメントアウト
local   all             all                                     trust　←　追加
# IPv4 local connections:
#host    all             all             127.0.0.1/32            peer ←　コメントアウト
host    all             all             127.0.0.1/32          　trust　←　追加　
# IPv6 local connections:
#local   all             all            ::1/128                  peer　←　コメントアウト
host    all             all             ::1/128                 trust　←　追加　
```


## composer
- インストール
```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ mv composer.phar /usr/local/bin/composer
```


# Usage

## git clone
```
mkdir /var/www/apps
cd /var/www/apps
git clone https://github.com/maeno-c/test-codeigniter
```

## SELinux

## Postgres
- restore



