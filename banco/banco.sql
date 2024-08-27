DROP DATABASE IF EXISTS ifsp_inventario;
CREATE  DATABASE IF NOT EXISTS ifsp_inventario;
USE ifsp_inventario;
CREATE TABLE invetario_computadores
(
    id		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codigo_patrimonio   varchar(50),
    descricao   varchar(500),
    marca   varchar(100),
    modelo  varchar(100),
    armazenamento   INT,
    memoria INT,
    processador varchar(100),
    possui_placa_video  varchar(100),
    sistema_operacional varchar(050)
);