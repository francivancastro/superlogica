<?php
$host = "localhost"; // Servidor do banco de dados
$username = "root"; // Usuario do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "exercicio3"; // Nome do banco de dados
try {
    $conexao = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ";charset=utf8", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro na Conexão: ' . $e->getMessage() . '<br>';
    echo 'Código do Erro: ' . $e->getCode();
}


// mostra o código em string
function mostrar($val)
{
    echo '<pre style="background-color: #F0F0F0">';
    print_r($val);
    echo  '</pre>';
}


$sqlCreate = "<h2>Criando as tabelas </h2>
CREATE TABLE info (
    id int(11) NOT NULL,
    cpf bigint(20) NOT NULL,
    genero char(1) NOT NULL,
    ano_nascimento int(11) NOT NULL
  );
CREATE TABLE usuario (
    id int(11) NOT NULL,
    cpf bigint(20) NOT NULL,
    nome varchar(255) NOT NULL
);";
mostrar($sqlCreate);
$sqlInsert = "<h2>Populando as Tabelas </h2>
INSERT INTO info (id, cpf, genero, ano_nascimento) VALUES
(1, 16798125050, 'M', 1976),
(2, 59875804045, 'M', 1960),
(3, 4707649025, 'F', 1988),
(4, 21142450040, 'M', 1954),
(5, 83257946074, 'F', 1970),
(6, 7583509025, 'M', 1972);

INSERT INTO usuario (id, cpf, nome) VALUES
(1, 16798125050, 'Luke Skywalker'),
(2, 59875804045, 'Bruce Wayne'),
(3, 4707649025, 'Diane Prince'),
(4, 21142450040, 'Bruce Banner'),
(5, 83257946074, 'Harley Quinn'),
(6, 7583509025, 'Peter Parker');";
mostrar($sqlInsert);

$usuarios = $conexao->query("SELECT * FROM usuario");
$info = $conexao->query("SELECT * FROM info");
?>
<table border="1" style="float: left;margin-right:5px">
    <tr>
        <th>ID</th>
        <th>CPF</th>
        <th>NOME</th>
    </tr>
    <?php while ($exibe = $usuarios->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $exibe['id']; ?></td>
            <td><?= $exibe['cpf']; ?></td>
            <td><?= $exibe['nome']; ?></td>
        </tr>
    <?php } ?>
</table>

<table border="1">
    <tr>
        <th>ID</th>
        <th>CPF</th>
        <th>GENERO</th>
        <th>ANO_NASCIMENTO</th>
    </tr>
    <?php while ($exibe = $info->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $exibe['id']; ?></td>
            <td><?= $exibe['cpf']; ?></td>
            <td><?= $exibe['genero']; ?></td>
            <td><?= $exibe['ano_nascimento']; ?></td>
        </tr>
    <?php } ?>
</table>
<?php

$sqlQuery = "<h2>Relacionando as Tabelas exibindo Resultado Esperado </h2>
SELECT 
a.nome,
(CASE WHEN YEAR(CURDATE()) - b.ano_nascimento > 50 THEN 'SIM' ELSE 'NÃO' END) as maior_50_anos
FROM usuario a
INNER JOIN info b ON a.cpf = b.cpf AND b.genero = 'M'
WHERE a.nome LIKE '%er'
ORDER BY a.nome DESC;";
mostrar($sqlQuery);



$resultado = $conexao->query("SELECT 
                                a.nome,
                                (CASE WHEN YEAR(CURDATE()) - b.ano_nascimento > 50 THEN 'SIM' ELSE 'NÃO' END) as maior_50_anos
                                FROM usuario a
                                INNER JOIN info b ON a.cpf = b.cpf AND b.genero = 'M'
                                WHERE a.nome LIKE '%er'
                                ORDER BY a.nome DESC;");
?>

<h2>Tabela de resultado esperado </h2>

<table border="1">
    <tr>
        <th>USUARIO</th>
        <th>MAIOR_50_ANOS</th>
    </tr>
    <?php while ($exibe = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $exibe['nome']; ?></td>
            <td><?= $exibe['maior_50_anos']; ?></td>
        </tr>
    <?php } ?>
</table>