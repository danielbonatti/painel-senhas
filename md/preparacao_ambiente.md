# Preparação do ambiente de trabalho da aplicação

## 1 - Instalação do Apache
```
sudo apt install apache2
```
Configura as permissões no diretório .../html
```
sudo adduser nome_do_usuario www-data
sudo chown nome_do_usuario:www-data -R /var/www/html
sudo chmod 755 -R /var/www/html
```

## 2 - Instalação do PHP 7.4
```
sudo apt-add-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.4 php7.4-mysql php7.4-curl php7.4-zip php7.4-intl php7.4-xml php7.4-mbstring 
sudo chmod -R 777 /etc/php/ 
```

## 3 - Instalação do composer
```
https://getcomposer.org/download/
```