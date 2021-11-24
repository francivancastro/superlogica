CREATE DATABASE exercicio1;

USE exercicio1;

CREATE TABLE usuario (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  username varchar(50) NOT NULL,
  zipcode int(11) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(50) NOT NULL
);

INSERT INTO usuario (id, name, username, zipcode, email, password) VALUES
(1, 'Francivan Castro', 'francivan', 89212170, 'francivan.castro@gmail.com', '1234sadsadsads3'),
(3, 'Luke Skywalker', 'luke', 89212170, 'luke@email.com', '123qweasd123'),
(4, 'Bruce Wayne', 'bruce', 89212170, 'bruce@email.com', '1234567aaa'),
(5, 'Diane Prince', 'diene', 89212170, 'diane@email.com', 'senha12345');