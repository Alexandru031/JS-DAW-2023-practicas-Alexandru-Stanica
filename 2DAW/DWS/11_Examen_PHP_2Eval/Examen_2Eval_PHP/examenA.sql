-- Crear la base de datos examena 

CREATE DATABASE examena; 

 

-- Cambiar a la base de datos examena 

USE examena; 

 

-- Crear el usuario admin con password admin 

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'; 

 

-- Dar todos los privilegios al usuario admin 

GRANT ALL PRIVILEGES ON examena.* TO 'admin'@'localhost'; 

 

-- Crear la tabla usuario 

CREATE TABLE usuario ( 

  login VARCHAR(20) PRIMARY KEY, 

  password VARCHAR(20) NOT NULL 

); 

 

-- Crear la tabla jugador 

CREATE TABLE jugador ( 

  id INT PRIMARY KEY, 

  nombre VARCHAR(50) NOT NULL, 

  posicion VARCHAR(20) NOT NULL 

); 

 

-- Crear la tabla partido 

CREATE TABLE partido ( 

  jornada INT NOT NULL, 

  jugador INT NOT NULL, 

  puntos INT NOT NULL, 

  PRIMARY KEY (jornada, jugador), 

  FOREIGN KEY (jugador) REFERENCES jugador(id) 

); 

 

-- Crear la tabla equipo 

CREATE TABLE equipo ( 

  usuario VARCHAR(20) NOT NULL, 

  jugador1 INT NOT NULL, 

  jugador2 INT NOT NULL, 

  jugador3 INT NOT NULL, 

  jugador4 INT NOT NULL, 

  jugador5 INT NOT NULL, 

  puntos INT NOT NULL, 

  PRIMARY KEY (usuario), 

  FOREIGN KEY (usuario) REFERENCES usuario(login), 

  FOREIGN KEY (jugador1) REFERENCES jugador(id), 

  FOREIGN KEY (jugador2) REFERENCES jugador(id), 

  FOREIGN KEY (jugador3) REFERENCES jugador(id), 

  FOREIGN KEY (jugador4) REFERENCES jugador(id), 

  FOREIGN KEY (jugador5) REFERENCES jugador(id) 

); 

 

 

-- Insertar 5 filas en la tabla usuario 

INSERT INTO usuario (login, password) VALUES 

('ana', '1234'), 

('juan', '4321'), 

('luis', '5678'), 

('maria', '8765'), 

('pedro', '9012'); 

 

-- Insertar 20 filas en la tabla jugador 

INSERT INTO jugador (id, nombre, posicion) VALUES 

(0, 'VACIO','VACIO'), 

(1, 'Lionel Messi', 'Delantero'), 

(2, 'Karim Benzema', 'Delantero'), 

(3, 'Gerard Moreno', 'Delantero'), 

(4, 'Luis Suárez', 'Delantero'), 

(5, 'Youssef En-Nesyri', 'Delantero'), 

(6, 'Jan Oblak', 'Portero'), 

(7, 'Thibaut Courtois', 'Portero'), 

(8, 'Marc-André ter Stegen', 'Portero'), 

(9, 'Sergio Ramos', 'Defensa'), 

(10, 'Raphaël Varane', 'Defensa'), 

(11, 'Pau Torres', 'Defensa'), 

(12, 'Jules Koundé', 'Defensa'), 

(13, 'Toni Kroos', 'Centrocampista'), 

(14, 'Luka Modric', 'Centrocampista'), 

(15, 'Frenkie de Jong', 'Centrocampista'), 

(16, 'Dani Parejo', 'Centrocampista'), 

(17, 'Mikel Oyarzabal', 'Extremo'), 

(18, 'Iago Aspas', 'Extremo'), 

(19, 'João Félix', 'Extremo'), 

(20, 'Vinícius Júnior', 'Extremo'); 

 

-- Insertar 50 filas en la tabla partido 

INSERT INTO partido (jornada, jugador, puntos) VALUES 

(1, 1, 5), 

(1, 2, 4), 

(1, 3, 3), 

(1, 4, 2), 

(1, 5, 1), 

(1, 6, 5), 

(1, 7, 4), 

(1, 8, 3), 

(1, 9, 2), 

(1, 10, 1), 

(2, 1, 4), 

(2, 2, 5), 

(2, 3, 2), 

(2, 4, 3), 

(2, 5, 1), 

(2, 6, 4), 

(2, 7, 5), 

(2, 8, 3), 

(2, 9, 1), 

(2, 10, 2), 

(3, 1, 3), 

(3, 2, 4), 

(3, 3, 5), 

(3, 4, 2), 

(3, 5, 1), 

(3, 6, 3), 

(3, 7, 4), 

(3, 8, 5), 

(3, 9, 2), 

(3, 10, 1), 

(4, 1, 2), 

(4, 2, 3), 

(4, 3, 4), 

(4, 4, 5), 

(4, 5, 1), 

(4, 6, 2), 

(4, 7, 3), 

(4, 8, 4), 

(4, 9, 5), 

(4, 10, 1), 

(5, 1, 1), 

(5, 2, 2), 

(5, 3, 3), 

(5, 4, 4), 

(5, 5, 5), 

(5, 6, 1), 

(5, 7, 2), 

(5, 8, 3), 

(5, 9, 4), 

(5, 10, 5); 

 

-- Insertar en la tabla equipo una fila por cada usuario con los cinco campos de jugadores con el valor 0 

INSERT INTO equipo (usuario, jugador1, jugador2, jugador3, jugador4, jugador5, puntos) 

SELECT login, 0, 0, 0, 0, 0, 0 

FROM usuario; 