## Pasos para hacer el backup

Primero correr estos comandos!
*Código:*
```php
php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan optimize
```

Zip
*Código:*
```php
zip toda la carpeta
basic.zip
```

mySQL
*Código:*
```php
Crear backup con exportar DB desde phpMyAdmin
Se bajara como: basic.sql
```

