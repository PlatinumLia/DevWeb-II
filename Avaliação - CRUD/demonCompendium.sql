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

/* Tabela de preço de um demônio */
CREATE TABLE preco
(
 id INT AUTO_INCREMENT NOT NULL,
 valor FLOAT NOT NULL,
 CONSTRAINT pk_preco PRIMARY KEY (id)
);

/* Tabela e Insert's das fraquezas */
CREATE TABLE weakness 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo_wk VARCHAR(80) NOT NULL,
 CONSTRAINT pk_weakness PRIMARY KEY (id)
); 

INSERT INTO weakness (tipo_wk) VALUES ('Physical');
INSERT INTO weakness (tipo_wk) VALUES ('Gun');
INSERT INTO weakness (tipo_wk) VALUES ('Fire');
INSERT INTO weakness (tipo_wk) VALUES ('Ice');
INSERT INTO weakness (tipo_wk) VALUES ('Electricity');
INSERT INTO weakness (tipo_wk) VALUES ('Wind');
INSERT INTO weakness (tipo_wk) VALUES ('Psychokinesis');
INSERT INTO weakness (tipo_wk) VALUES ('Nuke');
INSERT INTO weakness (tipo_wk) VALUES ('Bless');
INSERT INTO weakness (tipo_wk) VALUES('Curse');
INSERT INTO weakness (tipo_wk) VALUES('Múltiplas fraquezas');

/* Tabela e Insert's das resistências */
CREATE TABLE resistence 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo_res VARCHAR(80) NOT NULL,  
 CONSTRAINT pk_resistence PRIMARY KEY (id)
); 

INSERT INTO resistence (tipo_res) VALUES ('Physical');
INSERT INTO resistence (tipo_res) VALUES ('Gun');
INSERT INTO resistence (tipo_res) VALUES ('Fire');
INSERT INTO resistence (tipo_res) VALUES ('Ice');
INSERT INTO resistence (tipo_res) VALUES ('Electricity');
INSERT INTO resistence (tipo_res) VALUES ('Wind');
INSERT INTO resistence (tipo_res) VALUES ('Psychokinesis');
INSERT INTO resistence (tipo_res) VALUES ('Nuke');
INSERT INTO resistence (tipo_res) VALUES ('Bless');
INSERT INTO resistence (tipo_res) VALUES ('Curse');
INSERT INTO resistence (tipo_res) VALUES ('Múltiplas resistências');

/* Tabela e Insert's das absorções */
CREATE TABLE absorb 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo_abs VARCHAR(80) NOT NULL,
 CONSTRAINT pk_absorb PRIMARY KEY (id)
); 

INSERT INTO absorb (tipo_abs) VALUES ('Physical');
INSERT INTO absorb (tipo_abs) VALUES ('Gun');
INSERT INTO absorb (tipo_abs) VALUES ('Fire');
INSERT INTO absorb (tipo_abs) VALUES ('Ice');
INSERT INTO absorb (tipo_abs) VALUES ('Electricity');
INSERT INTO absorb (tipo_abs) VALUES ('Wind');
INSERT INTO absorb (tipo_abs) VALUES ('Psychokinesis');
INSERT INTO absorb (tipo_abs) VALUES ('Nuke');
INSERT INTO absorb (tipo_abs) VALUES ('Bless');
INSERT INTO absorb (tipo_abs) VALUES ('Curse');
INSERT INTO absorb (tipo_abs) VALUES ('Múltipla absorção');


/* Tabela e Insert's da nulificação */
CREATE TABLE nullifies 
( 
 id INT AUTO_INCREMENT NOT NULL,  
 tipo_anula VARCHAR(80) NOT NULL,
 CONSTRAINT pk_nullifies PRIMARY KEY (id)
);

INSERT INTO nullifies (tipo_anula) VALUES ('Physical');
INSERT INTO nullifies (tipo_anula) VALUES ('Gun');
INSERT INTO nullifies (tipo_anula) VALUES ('Fire');
INSERT INTO nullifies (tipo_anula) VALUES ('Ice');
INSERT INTO nullifies (tipo_anula) VALUES ('Electricity');
INSERT INTO nullifies (tipo_anula) VALUES ('Wind');
INSERT INTO nullifies (tipo_anula) VALUES ('Psychokinesis');
INSERT INTO nullifies (tipo_anula) VALUES ('Nuke');
INSERT INTO nullifies (tipo_anula) VALUES ('Bless');
INSERT INTO nullifies (tipo_anula) VALUES ('Curse');
INSERT INTO nullifies (tipo_anula) VALUES ('Múltiplas anulações');

/* Tabela dos demônios e alterações de chaves estrangeiras*/
CREATE TABLE demon 
(
 id INT AUTO_INCREMENT NOT NULL,  
 nome VARCHAR(80) NOT NULL,  
 id_arcana INT NOT NULL,  
 id_weakness INT NOT NULL,  
 id_resistence INT NOT NULL,  
 id_absorb INT NOT NULL,  
 id_nullifies INT NOT NULL,  
 CONSTRAINT pk_demon PRIMARY KEY (id)
);

ALTER TABLE demon ADD CONSTRAINT fk_arcana FOREIGN KEY (id_arcana) REFERENCES arcana (id);
ALTER TABLE demon ADD CONSTRAINT fk_weakness FOREIGN KEY (id_weakness) REFERENCES weakness (id);
ALTER TABLE demon ADD CONSTRAINT fk_resistence FOREIGN KEY (id_resistence) REFERENCES resistence (id);
ALTER TABLE demon ADD CONSTRAINT fk_absorb FOREIGN KEY (id_absorb) REFERENCES absorb (id);
ALTER TABLE demon ADD CONSTRAINT fk_nullifies FOREIGN KEY (id_nullifies) REFERENCES nullifies (id);