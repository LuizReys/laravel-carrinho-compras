# laravel-carrinho-compras
Exemplo de loja virtual de produtos desenvolvido com Bootstrap, Laravel e MySql.

## Instruções
Para acessar o projeto, algumas etapas são necessárias:

## Instale o Composer
O mesmo pode ser baixado e configurado conforme documentação encontrada no link abaixo:

	https://getcomposer.org/

## Instale o GIT
O mesmo pode ser baixado e configurado conforme documentação encontrada no link abaixo:

	https://git-scm.com/

## Clone o projeto
Clone o projeto da loja virtual na sua máquina.:

	$ git clone https://github.com/LuizReys/laravel-carrinho-compras.git

Entre na pasta do projeto:

	$ cd laravel-carrinho-compras/

## Instale o Laradock
Clone o projeto laradock dentro da pasta do projeto.

	$ git clone https://github.com/Laradock/laradock.git

Entre na pasta laradock e renomeie o arquivo env-example para .env:

	$ cd laradock/
	$ cp env-example .env

## Crie os ambientes
Execute os contêineres:

	$ docker-compose up -d nginx mysql

## Configure o banco de dados
Execute o aplicativo bash do container laradock_mysql_... :

	$ docker exec -it laradock_mysql_... bash

Efetue login no MySQL:

	$ mysql -uroot -proot

Crie a base de dados:

	$ create database loja;

## Configure o ambiente de desenvolvimento
Execute o aplicativo bash do container laradock_workspace_... :

	$ docker exec -it laradock_workspace_... bash

Execute a instalação das dependências através do composer:

	$ composer install

Renomeie o arquivo env-example para .env:

	$ cp .env.example .env

Gere uma chave para sua aplicação.

	$ php artisan key:generate

## Configure o banco de dados no projeto
Abra o arquivo .env e edite as linhas abaixo:

De:

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=homestead
	DB_USERNAME=homestead
	DB_PASSWORD=secret

Para:

	DB_CONNECTION=mysql
	DB_HOST=laradock_mysql_...
	DB_PORT=3306
	DB_DATABASE=loja
	DB_USERNAME=root
	DB_PASSWORD=root

Obs.: No parâmetro DB_HOST, coloque o nome do seu container MySQL.

Execute o comando para criar as tabelas no banco de dados:

	$ php artisan migrate --seed

Abra seu navegador e acesse o localhost: http://localhost.

	Pronto! Projeto configurado! :)

