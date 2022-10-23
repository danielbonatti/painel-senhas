# Projeto - Painel de Senhas
Painel de senhas em Laravel.

## Preparação do ambiente de trabalho da aplicação

### 1 - Instalação do Apache
```
sudo apt install apache2
```
Configura as permissões no diretório .../html
```
sudo adduser nome_do_usuario www-data
sudo chown nome_do_usuario:www-data -R /var/www/html
sudo chmod 755 -R /var/www/html
```

### 2 - Instalação do PHP 7.4
```
sudo apt-add-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.4 php7.4-mysql php7.4-curl php7.4-zip php7.4-intl php7.4-xml php7.4-mbstring 
sudo chmod -R 777 /etc/php/ 
```

### 3 - Instalação do composer
```
https://getcomposer.org/download/
```

### 4 - Instalação do Laravel
Instalação do Laravel via Composer.
```
composer create-project laravel/laravel painel_senhas
```

### 5 - Editar .env
Especificar as credencias para conexão com o banco de dados. O arquivo .env fica na raiz da estrutura de pastas. 
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 6 - Reiniciar a vmbox se necessário
Se o Laravel exibir erros de conexão com o banco de dados tente reiniciar a maquina virtual, pois um período de ociosidade na vm pode cortar a conexão com a internet. 

### 7 - Rodar a aplicação 
Executar o comando abaixo na raiz do diretório do projeto criado.
```
php artisan serve
```

