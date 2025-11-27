/* Tabela e Insert's das Arcanas */
CREATE TABLE arcana 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,  
 numero_arcana INT NOT NULL, 
 CONSTRAINT pk_arcana PRIMARY KEY (id) 
);

INSERT INTO arcana (nome, numero_arcana) VALUES
('Nenhuma', 0),
('Fool', 0),
('Magician', 1),
('Priestess', 2),
('Empress', 3),
('Emperor', 4),
('Hierophant', 5),
('Lovers', 6),
('Chariot', 7),
('Justice', 8),
('Hermit', 9),
('Fortune', 10),
('Strength', 11),
('Hanged Man', 12),
('Death', 13),
('Temperance', 14),
('Devil', 15),
('Tower', 16),
('Star', 17),
('Moon', 18),
('Sun', 19),
('Judgement', 20),
('World', 21),
('Universe', 21);

/* Tabela e Insert's dos tipos elementais */
CREATE TABLE tipos 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo VARCHAR(80) NOT NULL,
 CONSTRAINT pk_tipos PRIMARY KEY (id)  
);

INSERT INTO tipos (tipo) VALUES 
('Nenhuma'),
('Physical'),
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
('Nenhuma'),
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