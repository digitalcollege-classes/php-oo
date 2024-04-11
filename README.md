# SETUP PHP

Uma base de aplicação limpa (sem frameworks), para estudos em PHP Orientado a objetos.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx

## Como usar

Primeiro basta clonar o repositório

`git clone bla bla bla`

Agora entre na pasta com o terminal 
`cd php-oo`

E agora basta rodar o docker

`docker rm setup-php -f`
`docker rm setup-nginx -f`
`docker rm setup-mysql -f`

`docker-compose up -d`

Pronto,é sucesso!
## Acessar o container do php
Para acessar o container do PHP, entre pelo terminal no diretório do projeto e execute:
`docker-compose exec php bash`

### Instalar os pacotes do composer
Dentro do container do PHP digite:
`composer install`

--- 

## Acessar o container do mysql
Para acessar o container do Mysql, entre pelo terminal no diretório do projeto e execute:
`docker-compose exec mysql bash`

### Para acessar o cliente do mysql
Dentro do container do MySQL execute
`mysql -u user -ppassword`

---

## Comandos do Doctrine

Para criar/atualizar o esquema do banco de dados, entre no container do PHP e digite:
`php bin/doctrine orm:schema-tool:update --force`

Acesse o http://localhost:8080
