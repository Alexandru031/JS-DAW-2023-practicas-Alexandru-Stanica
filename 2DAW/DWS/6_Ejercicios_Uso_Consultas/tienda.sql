CREATE TABLE fabricante (
  codigo INT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL
);

CREATE TABLE artículo (
  codigo INT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  precio INT NOT NULL,
  fabricante INT NOT NULL,
  CONSTRAINT fabr_prod_FK FOREIGN KEY (fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO fabricante VALUES(1, 'Kingston');
INSERT INTO fabricante VALUES(2, 'Adata');
INSERT INTO fabricante VALUES(3, 'Logitech');
INSERT INTO fabricante VALUES(4, 'Lexar');
INSERT INTO fabricante VALUES(5, 'Seagate');

INSERT INTO artículo VALUES(1, 'Teclado', 10, 3);
INSERT INTO artículo VALUES(2, 'Disco duro 300 GB', 50, 5);
INSERT INTO artículo VALUES(3, 'Mouse', 8, 3);
INSERT INTO artículo VALUES(4, 'Memoria USB', 14, 4);
INSERT INTO artículo VALUES(5, 'Memoria RAM', 29, 1);
INSERT INTO artículo VALUES(6, 'Disco duro extraíble 250 GB', 65, 5);
INSERT INTO artículo VALUES(7, 'Memoria USB', 27, 1);
INSERT INTO artículo VALUES(8, 'DVD Rom', 45, 2);
INSERT INTO artículo VALUES(9, 'CD Rom', 200, 2);
INSERT INTO artículo VALUES(10, 'Tarjeta de red', 18, 3);