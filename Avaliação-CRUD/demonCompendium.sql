/* Tabela e Insert's das Arcanas */
CREATE TABLE arcana 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,  
 numero_arcana INT NOT NULL, 
 CONSTRAINT pk_arcana PRIMARY KEY (id) 
);

INSERT INTO arcana (nome, numero_arcana) VALUES ('Nenhuma', 0);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Fool', 0);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Magician', 1);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Priestess', 2);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Empress', 3);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Emperor', 4);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Hierophant', 5);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Lovers', 6);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Chariot', 7);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Justice', 8);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Hermit', 9);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Fortune', 10);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Strength', 11);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Hanged Man', 12);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Death', 13);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Temperance', 14);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Devil', 15);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Tower', 16);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Star', 17);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Moon', 18);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Sun', 19);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Judgement', 20);
INSERT INTO arcana (nome, numero_arcana) VALUES ('World', 21);
INSERT INTO arcana (nome, numero_arcana) VALUES ('Universe', 21);

/* Tabela e Insert's dos tipos elementais */
CREATE TABLE tipos 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo VARCHAR(80) NOT NULL,
 CONSTRAINT pk_tipos PRIMARY KEY (id)  
);

INSERT INTO tipos (tipo) VALUES ('Nenhuma');
INSERT INTO tipos (tipo) VALUES ('Physical');
INSERT INTO tipos (tipo) VALUES ('Gun');
INSERT INTO tipos (tipo) VALUES ('Fire');
INSERT INTO tipos (tipo) VALUES ('Ice');
INSERT INTO tipos (tipo) VALUES ('Electricity');
INSERT INTO tipos (tipo) VALUES ('Wind');
INSERT INTO tipos (tipo) VALUES ('Psychokinesis');
INSERT INTO tipos (tipo) VALUES ('Nuke');
INSERT INTO tipos (tipo) VALUES ('Bless');
INSERT INTO tipos (tipo) VALUES ('Curse');
INSERT INTO tipos (tipo) VALUES ('Múltiplo');

CREATE TABLE racas
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 CONSTRAINT pk_racas PRIMARY KEY (id)
); 

INSERT INTO racas (nome) VALUES ('Nenhuma');
INSERT INTO racas (nome) VALUES ('Akuma');
INSERT INTO racas (nome) VALUES ('Amatsu');
INSERT INTO racas (nome) VALUES ('Avatar');
INSERT INTO racas (nome) VALUES ('Avian');
INSERT INTO racas (nome) VALUES ('Beast');
INSERT INTO racas (nome) VALUES ('Brute');
INSERT INTO racas (nome) VALUES ('Chaos');
INSERT INTO racas (nome) VALUES ('Deity');
INSERT INTO racas (nome) VALUES ('Devil');
INSERT INTO racas (nome) VALUES ('Dragon');
INSERT INTO racas (nome) VALUES ('Drake');
INSERT INTO racas (nome) VALUES ('Element');
INSERT INTO racas (nome) VALUES ('Enigma');
INSERT INTO racas (nome) VALUES ('Entity');
INSERT INTO racas (nome) VALUES ('Fairy');
INSERT INTO racas (nome) VALUES ('Fallen');
INSERT INTO racas (nome) VALUES ('Famed');
INSERT INTO racas (nome) VALUES ('Femme');
INSERT INTO racas (nome) VALUES ('Flight');
INSERT INTO racas (nome) VALUES ('Fury');
INSERT INTO racas (nome) VALUES ('General');
INSERT INTO racas (nome) VALUES ('Haunt');
INSERT INTO racas (nome) VALUES ('Holy');
INSERT INTO racas (nome) VALUES ('Kaijuu');
INSERT INTO racas (nome) VALUES ('Lady');
INSERT INTO racas (nome) VALUES ('Machine');
INSERT INTO racas (nome) VALUES ('Megami');
INSERT INTO racas (nome) VALUES ('Mitama');
INSERT INTO racas (nome) VALUES ('Night');
INSERT INTO racas (nome) VALUES ('Primal');
INSERT INTO racas (nome) VALUES ('Raptor');
INSERT INTO racas (nome) VALUES ('Reaper');
INSERT INTO racas (nome) VALUES ('Snake');
INSERT INTO racas (nome) VALUES ('Spirit');
INSERT INTO racas (nome) VALUES ('Tenma');
INSERT INTO racas (nome) VALUES ('Tyrant');
INSERT INTO racas (nome) VALUES ('UMA');
INSERT INTO racas (nome) VALUES ('Vermin');
INSERT INTO racas (nome) VALUES ('Vile');
INSERT INTO racas (nome) VALUES ('Wargod');
INSERT INTO racas (nome) VALUES ('Yoma');
INSERT INTO racas (nome) VALUES ('Zealot');

/* Tabela dos demônios e alterações de chaves estrangeiras*/
CREATE TABLE demon 
(
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 preco INT NOT NULL,
 id_arcana INT NOT NULL,  
 id_tipos INT NOT NULL,
 id_racas INT NOT NULL,
 CONSTRAINT pk_demon PRIMARY KEY (id)
);

ALTER TABLE demon ADD CONSTRAINT fk_arcana FOREIGN KEY (id_arcana) REFERENCES arcana (id);
ALTER TABLE demon ADD CONSTRAINT fk_tipos FOREIGN KEY (id_tipos) REFERENCES tipos (id);
ALTER TABLE demon ADD CONSTRAINT fk_racas FOREIGN KEY (id_racas) REFERENCES racas (id);