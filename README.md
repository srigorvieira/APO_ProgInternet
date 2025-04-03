# Mini Sistema de Gestão de Produtos - GESPRO

Este projeto é um trabalho prático da disciplina de Programação para Internet. Ele oferece funcionalidades para o gerenciamento de produtos, usuários, fornecedores, carrinho de compras e finalização de pedidos.

# Tecnologias Utilizadas

- **PHP 8.2**
- **MySQL via XAMPP para armazenamento de dados**
- **Composer para gerenciamento de dependências**
- **Bootstrap para o frontend**
- **JavaScript para funcionalidades interativas**

# Funcionalidades do Projeto

- **Autenticação de Usuários**: Cadastro, login e controle de sessões.
- **Cadastro de Produtos e Fornecedores**: Gerenciamento de informações de produtos e fornecedores.
- **Carrinho de Compras**: Funcionalidades de adicionar e remover produtos do carrinho.
- **Finalização de Compra**: Criação e gestão de pedidos realizados pelos usuários.

# Como Rodar o Projeto

- **Passo 1**: Clonar o Repositório

git clone https://github.com/srigorvieira/APO_ProgInternet
cd gespro

- **Passo 2**: Configurar o Ambiente

- Certifique-se de que o XAMPP esteja em execução com o MySQL ativo.
- Crie um banco de dados MySQL e ajuste as configurações no arquivo .env (renomeie o .env-example para .env).
- Instale as dependências do projeto utilizando o Composer:

cmd -> composer install

- **Passo 3**: Subir o Servidor
Para rodar o projeto, você pode usar o PHP embutido para desenvolvimento:

php -S localhost:8000 -t public
O sistema estará disponível em http://localhost:8000

- **Passo 4**: Executar as Migrações
Para criar as tabelas no banco de dados, execute o script de migração:

php app/infra/migracao.php

Isso criará as tabelas necessárias no MySQL.

**Estrutura do Projeto**

**app**: Contém os controllers, camada de infraestrutura, models e actions.
**public**: Arquivo principal index.php, ponto de entrada da aplicação.
**resources**: Arquivos de frontend, como CSS e JavaScript.

Comandos Úteis
Rodar servidor PHP: php -S localhost:8000 -t public

Acessar o banco de dados: Use o cliente MySQL para acessar o banco e realizar consultas.

O sistema está pronto para uso!

