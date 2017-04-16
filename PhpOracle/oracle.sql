
/* Conectandonos a oracle */
connect system/tu_password;


/* Creando la tabla alumno */
create table alumno
(
ci number(7)primary key,
nombre varchar(20),
apellido varchar(20),
fech_nac date
);

/* Descripcion de la tabla alumno */
desc alumno;

/* Insertando datos a la tabla */
insert into alumno values('10','Natalia','Ortiz','01-01-1989');
insert into alumno values('20','Monica','Arias','02-021989');
insert into alumno values('30','Camila','Vargas','27-071990');
insert into alumno values('40','Sandra','Rojas','01-01-1989');
 
 
/* Viendo la informacion de la tabla */
select * from alumno;