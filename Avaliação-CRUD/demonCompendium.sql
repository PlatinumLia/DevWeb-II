/* Tabela e Insert's das Arcanas */
CREATE TABLE arcana 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,  
 numero_arcana INT NOT NULL, 
 CONSTRAINT pk_arcana PRIMARY KEY (id) 
);

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

INSERT INTO tipos (tipo) VALUES ('Physical'),
('Gun'),
('Fire'),
('Ice'),
('Electricity'),
('Wind'),
('Psychokinesis'),
('Nuke'),
('Bless'),
('Curse'),
('Múltiplo');

CREATE TABLE racas
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 CONSTRAINT pk_racas PRIMARY KEY (id)
); 

INSERT INTO racas (nome) VALUES
('Akuma'),
('Amatsu'),
('Avatar'),
('Avian'),
('Beast'),
('Brute'),
('Chaos'),
('Deity'),
('Devil'),
('Dragon'),
('Drake'),
('Element'),
('Enigma'),
('Entity'),
('Fairy'),
('Fallen'),
('Famed'),
('Femme'),
('Flight'),
('Fury'),
('General'),
('Haunt'),
('Holy'),
('Kaijuu'),
('Lady'),
('Machine'),
('Megami'),
('Mitama'),
('Night'),
('Primal'),
('Raptor'),
('Reaper'),
('Snake'),
('Spirit'),
('Tenma'),
('Tyrant'),
('UMA'),
('Vermin'),
('Vile'),
('Wargod'),
('Yoma'),
('Zealot');

/* Tabela dos demônios e alterações de chaves estrangeiras*/
CREATE TABLE demon 
(
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,
 preco FLOAT NOT NULL,
 id_arcana INT NOT NULL,  
 id_tipos INT NOT NULL,
 id_racas INT NOT NULL,
 CONSTRAINT pk_demon PRIMARY KEY (id)
);

ALTER TABLE demon ADD CONSTRAINT fk_arcana FOREIGN KEY (id_arcana) REFERENCES arcana (id);
ALTER TABLE demon ADD CONSTRAINT fk_tipos FOREIGN KEY (id_tipos) REFERENCES tipos (id);
ALTER TABLE demon ADD CONSTRAINT fk_racas FOREIGN KEY (id_racas) REFERENCES racas (id);