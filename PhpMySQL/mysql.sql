/*Creando la base de datos*/
create database labbase;

/*Conectandonos a la base de datos*/
use labbase;


/*Creando la tabla alumno*/
create table alumno
(
ci numeric(7)primary key,
nombre varchar(20),
apellido varchar(20),
fech_nac date
);

/* Mostrando todas las tablas */
show tales;

/* Descripcion de la tabla alumno */
desc alumno;

/* Insertando datos a la tabla*/
insert into alumno values('10','Natalia','Ortiz','1989-01-01');
insert into alumno values('20','Monica','Arias','1989-02-02');
insert into alumno values('30','Camila','Vargas','1990-7-27');
insert into alumno values('40','Sandra','Rojas','1989-01-01');
 
 
/* Viendo la informacion de la tabla */
select * from alumno;