# Sistema de Cadastro de Usuários

Este é um sistema simples de cadastro de usuários que permite realizar as seguintes ações:

- Cadastro de novos usuários.
- Listagem de usuários cadastrados.
- Edição e exclusão de usuários.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Banco de Dados**: MySQL

## Funcionalidades

### 1. Página de Cadastro
- Campos: Nome, E-mail, Senha.
- Validação de campos obrigatórios.
- O e-mail deve ser único (não permite cadastro duplicado).
- Senha com pelo menos 6 caracteres.

### 2. Página de Listagem de Usuários
- Exibe uma tabela com Nome, E-mail e Ações (Editar/Excluir).

### 3. Funcionalidades de Edição e Exclusão
- Permite editar os dados de um usuário.
- Permite excluir um usuário do sistema.

## Instalação

Para rodar este projeto em sua máquina local, siga as instruções abaixo:

### Pré-requisitos

- PHP 7.4 ou superior.
- MySQL.
- Servidor web (ex: XAMPP, WAMP, ou servidor Linux com Apache e PHP configurados).

### Passos

1. Clone este repositório em sua máquina:
    ```bash
    git clone https://github.com/luvsscorpius/desafio-tecnico-sistema-de-cadastro
    ```

2. Crie um banco de dados MySQL chamado `cadastro_usuarios` e execute o seguinte script para criar a tabela de usuários:

    ```sql
    CREATE TABLE usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL
    );
    ```

3. Altere as credenciais de acesso ao banco de dados no arquivo `db.php`:

    ```php
    <?php
    $servername = "localhost";
    $username = "root"; // Seu usuário do MySQL
    $password = ""; // Sua senha do MySQL
    $dbname = "sistema"; // Nome do banco de dados

    $conn = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    ?>
    ```

## Estrutura de Arquivos

- `cadastro.php`: Página de cadastro de novos usuários.
- `listar.php`: Página de listagem de usuários.
- `editar.php`: Página para edição de dados de usuários.
- `excluir.php`: Página para excluir usuários.
- `db.php`: Conexão com o banco de dados.

## Considerações de Segurança

- **Senhas**: As senhas são armazenadas de forma segura utilizando `password_hash()` do PHP.
- **Validações**: A validação do e-mail é realizada para garantir que o mesmo não seja duplicado no banco de dados.

## Contribuições

Se você encontrar algum erro ou tiver sugestões para melhorias, fique à vontade para abrir um **issue** ou enviar um **pull request**.

## Licença

Este projeto é licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.

