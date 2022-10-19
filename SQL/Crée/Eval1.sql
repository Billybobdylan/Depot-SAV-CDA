CREATE DATABASE comm;

USE comm;

CREATE TABLE Client(
	cli_num INT PRIMARY KEY,
	cli_nom VARCHAR(50),
	cli_adresse VARCHAR(50),
	cli_tel VARCHAR(30)
);

CREATE TABLE Commande(
	com_num INT PRIMARY KEY,
	com_date DATETIME,
	com_obs VARCHAR(50),
	cli_num INT REFERENCES Client(cli_num)
);

CREATE TABLE Produit(
	pro_num INT PRIMARY KEY,
	pro_libelle VARCHAR(50),
	pro_description VARCHAR(50)
);

CREATE TABLE est_compose(
	est_qte INT,
	com_num INT,
	pro_num INT,
	PRIMARY KEY (com_num, pro_num),
	FOREIGN KEY (com_num) REFERENCES Commande(com_num),
	FOREIGN KEY (pro_num) REFERENCES Produit(pro_num)
);

CREATE INDEX idx_cli
ON Client(cli_nom);