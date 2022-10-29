# Comandos ARTISAN
Comandos para gerar classes.

## 1 - Gerar migrations
Gera uma estrutura para criação da tabela no DB após executar php artisan migrate
```
php artisan make:migration create_setores_table
```

## 2 - Re-migrate após detetar tabela(s)
Recria a(s) tabela(s) no banco de dados.
```
php artisan migrate:refresh
```