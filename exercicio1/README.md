# appmercado

Desafio SoftExpert.

Sitema de um Mercado Web com Venda de Produtos e Calculo de Imposto.

# Quick start

** Certifique-se de ter instalado o PostgreSQL versão 9.4 e PHP 7.4 **

```bash
# clone o repositório
$ git clone https://github.com/francivancastro/appmercado.git

# Entre na pasta.
$ cd appmercado

# Execute o restore PostgreSQL
$ createdb -T template0 mercado

$ pg_restore -d mercado mercado.dump
```

** Para para configurar os dados de conexão com o PostgreSQL. **

```php
# Edite o arquivo "config.php"  e altere o valor das variáveis de acordo com sua configuração do banco.

$config = array(
    'driver' => 'pgsql',
    'host' => 'localhost', // Servidor do banco de dados
    'port' => '5432', // Porta do banco de dados
    'user' => 'postgres', // Usuario do banco de dados
    'pass' => '', // Senha do banco de dados
    'dbname' => '', // Nome do banco de dados
);
```

```bash
# Inicie a aplicação

$ php -S localhost:8000

```
** Credenciais de Acesso dos usuários **

Administrador:
    Username: admin
    Senha: admin
Cliente:
    Username: cliente
    Senha: cliente


