DROP DATABASE IF EXISTS aplicacio;
CREATE DATABASE aplicacio;

USE aplicacio;

CREATE TABLE alumne (
	idAlumne INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    contrasenya VARCHAR(100) NOT NULL,
    avatar VARCHAR(50)
);

CREATE TABLE moderador (
    idModerador INT AUTO_INCREMENT PRIMARY KEY,
    tipus VARCHAR(10) NOT NULL,
    nom VARCHAR(25) NOT NULL,
    contrasenya VARCHAR(100) NOT NULL,
    avatar VARCHAR(50)
);

CREATE TABLE activitat (
    idActivitat INT AUTO_INCREMENT PRIMARY KEY,
    codi VARCHAR(10) NOT NULL,
    nom VARCHAR(25) NOT NULL,
    tempoActiu BOOLEAN,
    idModerador INT,
    temps TIME,
    estat VARCHAR(10) NOT NULL,
    FOREIGN KEY (idModerador) REFERENCES moderador (idModerador)
);

CREATE TABLE avaluacio (
	idAlumne INT,
    idActivitat INT,
    nota INT,
    FOREIGN KEY (idAlumne) REFERENCES alumne (idAlumne),
	FOREIGN KEY (idActivitat) REFERENCES activitat (idActivitat)
);

CREATE TABLE pregunta (
	idPregunta INT AUTO_INCREMENT PRIMARY KEY,
    enunciat VARCHAR(100) NOT NULL,
    tipus VARCHAR(10) NOT NULL
);

CREATE TABLE preguntaActivitat (
	idActivitat INT NOT NULL,
    idPregunta INT NOT NULL,
    FOREIGN KEY (idActivitat) REFERENCES activitat (idActivitat),
    FOREIGN KEY (idPregunta) REFERENCES pregunta (idPregunta)
);

CREATE TABLE resposta (
	idResposta INT AUTO_INCREMENT PRIMARY KEY,
    enunciat VARCHAR(100) NOT NULL,
    correcte BOOLEAN
);

CREATE TABLE respostaPregunta (
	idPregunta INT NOT NULL,
    idResposta INT NOT NULL,
    FOREIGN KEY (idPregunta) REFERENCES pregunta(idPregunta),
    FOREIGN KEY (idResposta) REFERENCES resposta(idResposta)
);

## INSERTS
## LAS CONTRASEÑAS ESTAN ENCRIPTADAS, ESTA SERIA EQUIVALENTE A: 1234
/*INSERT INTO alumne (nom, contrasenya) VALUES ("Ana", "TqV5LjxQYJtm2C6PD6Zycg==", "naranja");
INSERT INTO alumne (nom, contrasenya) VALUES ("Bernart", "TqV5LjxQYJtm2C6PD6Zycg==", "naranja");

INSERT INTO moderador (tipus, nom, contrasenya) VALUES ("admin", "Alex", "TqV5LjxQYJtm2C6PD6Zycg==");
INSERT INTO moderador (tipus, nom, contrasenya) VALUES ("profesor", "Jan", "TqV5LjxQYJtm2C6PD6Zycg==");

INSERT INTO activitat (nom, '778625', tempoActiu, idTemporitzador, temps, estat) VALUES ("Activitat 1", true, 1, "1:00:00", "acabat");

INSERT INTO avaluacio VALUES (1, 1, 8);
INSERT INTO avaluacio VALUES (2, 1, 2);

INSERT INTO preguntaActivitat (idActivitat, idPregunta) VALUES (1, 1);
INSERT INTO preguntaActivitat (idActivitat, idPregunta) VALUES (1, 2);

INSERT INTO respostaPregunta (idPregunta, idResposta) VALUES (1, 1);
INSERT INTO respostaPregunta (idPregunta, idResposta) VALUES (1, 2);
INSERT INTO respostaPregunta (idPregunta, idResposta) VALUES (1, 3);
INSERT INTO respostaPregunta (idPregunta, idResposta) VALUES (1, 4);

INSERT INTO pregunta VALUES (1, "What country are we living", "simple");
INSERT INTO pregunta VALUES (2, "What pandemic are we suffering right now", "multiple");

INSERT INTO resposta VALUES (1, "Spain", true);
INSERT INTO resposta VALUES (2, "France", false);
INSERT INTO resposta VALUES (3, "Albania", false);
INSERT INTO resposta VALUES (4, "Algeria", true);*/