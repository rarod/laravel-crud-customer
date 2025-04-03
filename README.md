Documentação do Sistema de Cadastro de Clientes

1. Introdução

Este documento descreve a implementação de um sistema de cadastro de clientes, desenvolvido em PHP utilizando o framework Laravel, seguindo o padrão MVC. O sistema permite a criação, visualização, edição e exclusão de registros de clientes, incluindo o armazenamento e exibição de fotos dos clientes.

2. Enunciado da Tarefa

Desenvolver um sistema de cadastro de clientes com as seguintes funcionalidades:

* Tela de visualização da lista de clientes cadastrados.
* Tela de exclusão de registros de clientes.
* Formulário para inserção de novos clientes.
* Formulário para edição de clientes existentes.
* Persistência dos dados em um banco de dados.
* Campos obrigatórios no formulário: nome, e-mail, telefone e foto.
* Upload da foto do cliente para o servidor HTTP.
* Exibição da miniatura da foto ao lado do nome do cliente na lista de visualização.
* Utilização da linguagem PHP.
* Implementação do padrão MVC.
* Utilização do framework Laravel.

3. Visão Geral da Implementação

O sistema foi desenvolvido utilizando o framework Laravel, que facilita a implementação do padrão MVC e oferece recursos para o desenvolvimento rápido de aplicações web.

* Model: O Model "Post" representa a tabela "posts" no banco de dados, que armazena os dados dos clientes.
* Controller: O Controller "PostController" gerencia as requisições HTTP e a lógica de negócios, como a criação, edição, visualização e exclusão de clientes.
* Views: As Views são responsáveis pela apresentação dos dados ao usuário, utilizando a sintaxe Blade do Laravel.
* Rotas: O arquivo de rotas define as URLs e seus respectivos Controllers.
* Banco de Dados: Os dados dos clientes são armazenados em um banco de dados MySQL.
* Upload de Fotos: As fotos dos clientes são armazenadas no servidor HTTP, e o caminho da foto é armazenado no banco de dados.
* Miniaturas: As miniaturas das fotos são exibidas ao lado do nome do cliente na lista de visualização.

4. Funcionalidades

* Listagem de clientes com miniaturas das fotos.
* Formulário para criação de novos clientes.
* Formulário para edição de clientes existentes.
* Exclusão de clientes.
* Visualização de detalhes de um cliente específico.

5. Link do Projeto no GitHub

* [https://github.com/rarod/laravel-crud-customer](https://github.com/rarod/laravel-crud-customer)

6. Passos para Subir o Projeto

1.  Clone o repositório do GitHub para o seu ambiente local:

    ```bash
    git clone git@github.com:rarod/laravel-crud-customer.git
    ```

2.  Navegue até a pasta do projeto:

    ```bash
    cd laravel-crud-customer
    ```

3.  Instale as dependências do Composer:

    ```bash
    composer install
    ```

4.  Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente (banco de dados, etc.):

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` com as configurações do seu banco de dados:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sua_database
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

5.  Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6.  Execute as migrations do banco de dados:

    ```bash
    php artisan migrate
    ```

7.  Inicie o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

8.  Acesse a aplicação no navegador: `http://localhost:8000`