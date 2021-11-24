# superlogica

Desafio Superlógica Tecnologias.

Separado em 3 pastas.

# Quick start

** Certifique-se de ter instalado o Mysql versão 5.7+ e PHP 7+ **

```bash
# clone o repositório
$ git clone https://github.com/francivancastro/superlogica.git

```php
# EXERCICIO 1
cd exercicio1
# Importe os aquivos banco.sql
# Edite o arquivo "config.php"  e altere o valor das variáveis de acordo com sua configuração do banco.

$config = array(
    'driver' => 'mysql',
    'host' => 'localhost', // Servidor do banco de dados
    'port' => '3306', // Porta do banco de dados
    'user' => 'root', // Usuario do banco de dados
    'pass' => '', // Senha do banco de dados
    'dbname' => '', // Nome do banco de dados
);
# EXERCICIO 3
cd exercicio3
# Importe os aquivos banco.sql
# Edite o arquivo "index.php"  e altere o valor das variáveis de acordo com sua configuração do banco.

```

```bash
# Para inicar o servidor localmente, basta acessar a pasta que deseja e rodar o seguinte comando: 

$ php -S localhost:8000