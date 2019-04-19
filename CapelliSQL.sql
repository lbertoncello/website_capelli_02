CREATE DATABASE trabalhopw;

USE trabalhopw;

CREATE TABLE administradores
(
	id INT AUTO_INCREMENT,
	login VARCHAR (20) NOT NULL,
	senha VARCHAR (50) NOT NULL,
	nome VARCHAR(50) NOT NULL,
	situacao BOOLEAN NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE usuario
(
id INT AUTO_INCREMENT,
cpf VARCHAR(11) NOT NULL,
nome VARCHAR(50) NOT NULL,
rua VARCHAR(50) NOT NULL,
numero VARCHAR(5) NOT NULL,
bairro VARCHAR(30) NOT NULL,
cidade VARCHAR(50) NOT NULL,
uf CHAR(2) NOT NULL,
cep VARCHAR(8) NOT NULL,
email VARCHAR(50) NOT NULL,
telefone VARCHAR(13) NOT NULL,
senha VARCHAR(20) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE fornecedor
(
id INT AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
pais VARCHAR(50) NOT NULL,
cidade VARCHAR(50) NOT NULL,
bairro VARCHAR(50) NOT NULL,
rua VARCHAR(50) NOT NULL,
numero VARCHAR(6) NOT NULL,
cep VARCHAR(8) NOT NULL,
telefone VARCHAR(13),
email VARCHAR(60) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE colecao
(
id INT AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
idFornecedor INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (idFornecedor)
REFERENCES fornecedor(id)
);

CREATE TABLE tamanho
(
id INT AUTO_INCREMENT,
dimensoes  VARCHAR(30) NOT NULL UNIQUE,
PRIMARY KEY (id)
);

CREATE TABLE vestido
(
id INT AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
idTamanho INT NOT NULL,
idColecao  INT NOT NULL,
dataAquisicao DATE NOT NULL,
preco DOUBLE NOT NULL,
imagem VARCHAR(100) NOT NULL,
cor VARCHAR(25) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (idColecao)
REFERENCES colecao(id),
FOREIGN KEY (idTamanho)
REFERENCES tamanho(id)
);



CREATE TABLE aluguel
(
id INT AUTO_INCREMENT,
idUsuario  INT NOT NULL,
dataAluguel  DATE NOT NULL,
dataEntrega DATE NOT NULL,
valor DOUBLE NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE itensAluguel
(
id INT NOT NULL AUTO_INCREMENT,
preco DOUBLE NOT NULL,
vestidoId INT NOT NULL,
aluguelId INT NOT NULL,
qtd INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (aluguelId) REFERENCES aluguel(id),
FOREIGN KEY (vestidoId) REFERENCES vestido(id)
);

INSERT INTO administradores (login, senha, nome, situacao)
	VALUES ('admin', 'admin', 'Lucas', 1),
			('administrador', 'administrador', 'Larissa', 1),
			('adm', 'adm', 'Ninguem', 0);

INSERT INTO `trabalhopw`.`tamanho` (`dimensoes`) 
	VALUES ('32'),
		   ('34'),
		   ('36'),
		   ('38');

INSERT INTO `trabalhopw`.`fornecedor` (`nome`, `pais`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `telefone`, `email`) 
	VALUES ('Fornecedor 01', 'Brasil', 'Cachoeiro do Itapemirim', 'Bairro 01', 'Rua 01', '001', '29400000', '5528999123456', 'fornecedor01@outlook.com'),
	       ('Fornecedor 02', 'Inglaterra', 'Londres', 'Bairro 01', 'Rua 01', '001', '29400000', '5528999123457', 'fornecedor01@outlook.com'),
		   ('Fornecedor 03', 'Estados Unidos', 'Nova Iorque', 'Bairro 01', 'Rua 01', '001', '29400000', '5528999123458', 'fornecedor01@outlook.com'),
		   ('Fornecedor 04', 'Fran�a', 'Paris', 'Bairro 01', 'Rua 01', '001', '29400000', '5528999123459', 'fornecedor01@outlook.com');

INSERT INTO `trabalhopw`.`colecao` (`nome`, `idFornecedor`) 
	VALUES ('Inverno', '1'),
	       ('Ver�o', '2'),
		   ('Primavera', '3'),
		   ('Outono', '4');

INSERT INTO `trabalhopw`.`usuario` (`cpf`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `email`, `telefone`, `senha`) 
	VALUES ('12345678911', 'Ben Affleck', 'Rua 01', '001', 'Bairro 01', 'Cidade 01', 'ES', '29400000', 'ben@outlook.com', '5528999123451', '123'),
	       ('1234567922', 'Bruce Wayne', 'Rua 02', '002', 'Bairro 02', 'Cidade 02', 'SC', '29400001', 'bruce@outlook.com', '5528999123452', '123'),
		   ('1234567033', 'Goku', 'Rua 03', '003', 'Bairro 03', 'Cidade 03', 'RS', '29400002', 'goku@outlook.com', '5528999123453', '123'),
		   ('1234567144', 'Kratos', 'Rua 04', '004', 'Bairro 04', 'Cidade 04', 'TO', '29400003', 'kratos@outlook.com', '5528999123454', '123');

INSERT INTO `trabalhopw`.`vestido` (`nome`, `idTamanho`, `idColecao`, `dataAquisicao`, `preco`, `imagem`, `cor`) 
	VALUES ('Vestido 01', '1', '1', '2015-12-13', '1599.99', 'y21509.jpg', 'Branco'),
	       ('Vestido 02', '2', '2', '2015-12-13', '699.99', 'y21511.jpg', 'Preto'),
		   ('Vestido 03', '3', '3', '2015-12-13', '999.99', 'y21515.jpg', 'Cinza'),
		   ('Vestido 04', '4', '4', '2015-12-13', '2500.00', 'y21519.jpg', 'Verde');