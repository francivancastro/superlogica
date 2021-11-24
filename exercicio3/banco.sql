CREATE DATABASE exercicio3;

USE exercicio3;

CREATE TABLE info (
  id int(11) NOT NULL,
  cpf bigint(20) NOT NULL,
  genero char(1) NOT NULL,
  ano_nascimento int(11) NOT NULL
);

INSERT INTO info (id, cpf, genero, ano_nascimento) VALUES
(1, 16798125050, 'M', 1976),
(2, 59875804045, 'M', 1960),
(3, 4707649025, 'F', 1988),
(4, 21142450040, 'M', 1954),
(5, 83257946074, 'F', 1970),
(6, 7583509025, 'M', 1972);

CREATE TABLE usuario (
  id int(11) NOT NULL,
  cpf bigint(20) NOT NULL,
  nome varchar(255) NOT NULL
);

INSERT INTO usuario (id, cpf, nome) VALUES
(1, 16798125050, 'Luke Skywalker'),
(2, 59875804045, 'Bruce Wayne'),
(3, 4707649025, 'Diane Prince'),
(4, 21142450040, 'Bruce Banner'),
(5, 83257946074, 'Harley Quinn'),
(6, 7583509025, 'Peter Parker');


SELECT 
a.nome,
(CASE WHEN YEAR(CURDATE()) - b.ano_nascimento > 50 THEN 'SIM' ELSE 'NÃO' END) as maior_50_anos
FROM usuario a
INNER JOIN info b ON a.cpf = b.cpf AND b.genero = 'M'
WHERE a.nome LIKE '%er'
ORDER BY a.nome DESC;
