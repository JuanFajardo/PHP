/*Creando la base de datos Fisica*/
sqlite3 Bett0.db

/*Creando la tabla alumno*/
create table alumno
(
ci numeric(7)primary key,
nombre varchar(20),
apellido varchar(20),
fech_nac date
);

/* Mostrando todas las tablas */
select name from sqlite_master where type='table';

/* Descripcion de la tabla alumno */
select * from sqlite_master where type='table';

/* Insertando datos a la tabla*/
insert into alumno values('10','Natalia','Ortiz','1989-01-01');
insert into alumno values('20','Monica','Arias','1989-02-02');
insert into alumno values('30','Camila','Vargas','1990-7-27');
insert into alumno values('40','Sandra','Rojas','1989-01-01');
 
 
/* Viendo la informacion de la tabla */
select * from alumno;

	