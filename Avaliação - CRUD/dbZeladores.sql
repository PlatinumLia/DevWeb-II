/*Modelo base de dados*/

CREATE TABLE equipe 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 CONSTRAINT pk_equipe PRIMARY KEY (id)
);

/*INSERT das equipes*/
INSERT INTO equipe (nome) VALUES ('Akuta');
INSERT INTO equipe (nome) VALUES ('Eager');
INSERT INTO equipe (nome) VALUES ('Child');
INSERT INTO equipe (nome) VALUES ('Beauty');
INSERT INTO equipe (nome) VALUES ('Danger');
INSERT INTO equipe (nome) VALUES ('Front');

CREATE TABLE jinki 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 CONSTRAINT pk_jinki PRIMARY KEY (id)  
);

CREATE TABLE zelador 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,  
 ocupacao VARCHAR(80) NOT NULL,  
 idade INT NOT NULL,  
 id_jinki INT NOT NULL,
 id_equipe INT NOT NULL,  
 CONSTRAINT pk_zelador PRIMARY KEY (id)
);

ALTER TABLE zelador ADD CONSTRAINT fk_equipe FOREIGN KEY (id_equipe) REFERENCES equipe (id);
ALTER TABLE zelador ADD CONSTRAINT fk_jinki FOREIGN KEY (id_jinki) REFERENCES jinki (id);