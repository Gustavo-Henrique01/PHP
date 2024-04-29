create DATABASE bdtrabalho;
CREATE TABLE usuarios (
    id  SERIAL not null PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(1024) NOT NULL

);
INSERT INTO usuarios VALUES(1,'gustavo', md5('54321'));

select * from  usuarios ;

CREATE TABLE cadastros (
	id SERIAL NOT NULL primary key,
	nome VARCHAR(64) NOT NULL,
	descricao VARCHAR(512),
	foto VARCHAR(1024),
	id_usuario INT NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);

select * from cadastros;