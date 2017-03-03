# CRUD básico de pessoas com Framework Laravel

Página oficial do Laravel: https://laravel.com/

Implementação de um CRUD de pessoas com laravel PHP. O projeto ainda está sendo implementado, essas instruções poderão ser atualizadas a qualquer momento.

Caso você queira executar o projeto você precisará dos seguintes itens configurados na sua maquina:
  - [Composer](https://getcomposer.org/)
  - [PHP](https://secure.php.net/)
  - [Apache](https://httpd.apache.org/download.cgi)(não é necessário para PHP5.4+)
  - [MySQL](https://www.mysql.com/downloads/)(Ainda não está sendo usado)

# Executando

  - Após configurar o composer, vá até o diretório raiz do projeto e execute
```sh
$ composer install
```  
  - Se você não baixou o apache e está  com uma versão superior a 5.4 do PHP, vá até o diretório raiz do projeto e execute
```sh
$ php artisan serve
```
Após esse comando subirá um http-server local na porta 8000.
Caso a porta 8000 não esteja disponível execute
```sh
$ php artisan serve --port={digite o número da porta}
```
