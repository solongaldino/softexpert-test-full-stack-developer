<!-- PROJECT LOGO -->
<br />
<p align="center">

  <h3 align="center">Softexpert gestão de vendas</h3>

  <p align="center">
    Repositório das aplicações Web e API
    <br />
  </p>
</p>

## Tabela de Conteúdo

- [Sobre o projeto](#sobre-o-projeto)
  - [Stack](#stack)
- [Iniciando](#iniciando)
  - [Pré-requisitos](#pré-requisitos)
  - [Instalação](#instalação)
- [Uso](#uso)
- [Contato](#contato)

<!-- ABOUT THE PROJECT -->

## Sobre o Projeto

Aplicação desenvolvida para atender os requisitos de um sistema de gestão de vendas feito sem utilizar nenhum framerwork em seu backend com php, podendo utilizar bibliotecas. Ja seu frontend foi desenvolvido utilizando ReactJs com TypeScript e algumas bibliotecas conhecidas da comunidade Js.

A aplicação contas com as seguintes funcionalidades:

<ul>
  <li>Cadastro de impostos ou taxas</li>
  <li>Cadastro de tipos de produtos vinculado a taxas</li>
  <li>Cadastro de produtos</li>
  <li>Cadastro de vendas</li>
</ul>

### Stack

Essa seção lista as principais tecnologias/pacotes/bibliotecas utilizadas pela aplicação.

Geral:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/compose-file/)
- [Pgadmin](https://www.pgadmin.org/)
- [Ngix](https://www.nginx.com/)
- [Php-fpm](https://www.php.net/manual/pt_BR/install.fpm.php)

API:

- [Php8.2](https://www.php.net/)
- [DoctrineORM](https://www.doctrine-project.org/)
- [php-di](https://php-di.org/)
- [phpdotenv](https://github.com/vlucas/phpdotenv)
- [Postgres](https://www.postgresql.org/)

Web:

- [Typescript](https://www.typescriptlang.org/)
- [Express.js](https://expressjs.com/pt-br/)

OBS: Alguns recusos utilizaram imagem Docker.

## Iniciando

Abaixo há as instruções para configurar o projeto localmente.

Para gerar uma cópia local funcional, os seguintes passos devem ser seguidos:

### Pré-requisitos

E obrigatorio possuir instalado em sua maquina:

<ul>
  <li>Docker com verção superior ou igual 20.10.12</li>
  <li>Docker Compose com verção superior ou igual 1.29.2</li>
</ul>

### Instalação

1. Clone o repositório

```sh
git clone git@github.com:solongaldino/softexpert-test-full-stack-developer.git

```

## Uso

1. Dentro do repositório execute o comando abaixo para levantar a aplicação:

```sh
docker-compose up -d
```

caso queira acompanhar os logs

```sh
docker-compose up
```

2. Para acessar os recursos web você devera acessar as seguintes urls abaixo:

**Aplicação web**

```sh
http://localhost:8080
```

**Pgadmin**

```sh
http://localhost:16453
```

<ul>
  <li><strong>Email: </strong>admin@postgres.com</li>
  <li><strong>Senha: </strong>postgres</li>
</ul>

**API status**

```sh
http://localhost:9090/status
```

3. Para interagir com a API será nescessario utilizar algum cliente:

Exemplo de clientes:

- [Insomnia](https://insomnia.rest/)
- [Postman](https://www.postman.com/)

**Recomendado Insomnia**

No projeto contem o arquivo para importação contendo toda coleção de rotas.

**Comucação**

Request e Response em:

Content-Type: application/json; charset=UTF-8

**Rotas**

#### Cadastro de imposto

<ul>
  <li><strong>Metodo: </strong>POST</li>
  <li><strong>Url: </strong>http://localhost:9090/taxes</li>
  <li>
    <strong>Body: </strong>
    <br/>
    <ul>
      <li><strong>name: </strong>string</li>
      <li><strong>percentage: </strong>float | int</li>
    </ul>
  </li>
</ul>

```sh
POST http://localhost:9090/taxes
```

Cadastro de tipo de produto

```sh
POST http://localhost:9090/products-type
```

Cadastro de produto

```sh
POST http://localhost:9090/product
```

Salvar venda

```sh
POST http://localhost:9090/sale
```

<!-- CONTACT -->

## Contato

Solon Galdino - solon@xxx.com

_Link do Projeto: [Github](https://github.com/solongaldino/softexpert-test-full-stack-developer)_