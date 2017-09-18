# Instalação:

- Faça uma cópia do repositório no local:   ```git clone https://github.com/jjonathan/rss-uol.git```
- Instalar dependências do composer:        ```composer install```
- Configure seu arquivo .env (assim como [.env.example](/.env.example))
- Rode as migrations: ```php artisan migrate```
- Gerar a application key: ```php artisan key:generate```
- Rode o servidor ```php artisan serve```