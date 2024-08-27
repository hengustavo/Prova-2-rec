DROP TABLE IF EXISTS ifsp_inventario;
CREATE DATABASE IF NOT EXISTS ifsp_inventario;
USE ifsp_inventario;

CREATE TABLE inventario_computadores (
id			        INTEGER 		NOT NULL AUTO_INCREMENT,
codigo_patrimonio   VARCHAR(50)     NOT NULL,
descricao           VARCHAR(500)    NOT NULL,
marca               VARCHAR(100)    NOT NULL,
modelo              VARCHAR(100)    NOT NULL,
armazenamento       INT             NOT NULL,
memoria             INT             NOT NULL,
processador         VARCHAR(100)    NOT NULL,
possui_placa_video  BOOL            NOT NULL,
placa_video         VARCHAR(100),
sistema_operacional VARCHAR(50)     NOT NULL,
PRIMARY KEY (id)
);