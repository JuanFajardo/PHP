/*
Autor:	    Bett0
Para:		    http://www.sisoft.com.bo
Objetivo:	  Base de datos
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/


create database sqli;

use sqli;

create table noticias(
id_news int primary key auto_increment,
titulo varchar(200)not null,
resumen varchar(200)not null,
news text not null,
fecha date,
area varchar(20),
estado numeric(2),
imagen varchar(20)
);

insert into noticias values
('', 'Estructura de computadores',
  'Así se conoce la forma de estructuración utilizada en los ordenadores actuales; desde 1945 con UNIVAC, seutiliza la arquitectura diferenciadora entre hardware y software que él creó',
  'utiliza la arquitectura diferenciadora entre hardware y software que él creó (Von Neumann es junto con Alan Turing padre de la informática moderna, y curiosamente el gran precursor de los virus informáticos en sus estudios sobre autómatas autorreproductores que John Conway continuó en 1970 con el juego "Life", antecesor a su vez de los algoritmos genéticos). Según esta arquitectura, una definición adecuada para un computador sería la siguiente: Máquina programada de propósito general capaz de realizar una serie de operaciones básicas siguiendo un conjunto de instrucciones que le son proporcionadas a través de un programa encaminado a resolver un problema.',
'2010-01-01', 'Potlitica', '1', '1.jpg'),

('', 'Fundamentos de SSOO',
  'La misión del sistema operativo (SO) es dar una serie de programas al ordenador que permitan una utilización cómoda del computador, dotándolo de toda una serie de funciones:',
  'La misión del sistema operativo (SO) es dar una serie de programas al ordenador que permitan una utilización cómoda del computador, dotándolo de toda una serie de funciones:<br>- Gestión de los recursos del computador: Debe de controlar a este nivel la asignación de recursos a los programas libres en ejecución, recuperación de recursos cuando los programas no los necesitan. Será lo queconoceremos como "nivel kernel".<br>- Ejecución de servicios para los programas: Estos servicios incluirán varios para lanzar la ejecución de un programa, comunicar unos con otros, operar con la E/S, sobre ficheros, y el tratamiento y solución de errores.Lo llamaremos más adelante "nivel API"<br>- Ejecución de los mandatos de los usuarios: Es el módulo del sistema operativo que permite que los<br> usuarios dialoguen de forma interactiva con el sistema, conocido como "nivel shell".',
'2010-02-02', 'Potlitica', '1', '2.jpg'),

('', 'Sistemas de numeración',
  'Mientras que el sistema decimal utiliza diez cifras, los números del 0 al 9, para representar la información, el sistema binario sólo va a tener dos cifras; así, los únicos signos con los',
  'Mientras que el sistema decimal utiliza diez cifras, los números del 0 al 9, para representar la información, el sistema binario sólo va a tener dos cifras; así, los únicos signos con los que escribiremos en binario serán el 0 y el 1. Así, un número perféctamente válido en binario sería el "100110". Ahora, &iquest;cómo traducimos de binario a decimal y a la inversa? Un número como 100110 es muy bonito pero nos expresa más bien pocas cosas. Sí, podemos decir que si a cada una de estas cifras le pusiéramos una etiqueta, el 0 podría significar falso y el 1 verdadero; esta es una de las grandes utilidades del sistema binario, cada cifra puede servirnos para almacenar información en el sentido de si algo es cierto o no. Pero pasemos a traducirlo, y primero para ello vamos a ver el sentido de la numeración decimal. Pongamos el número 3741 y preguntémonos cómo hemos obtenido su valor; está claro, 3741 es lo mismo que 3x1000 + 7x100 + 4x10 + 1x1. Cada vez que nos desplazamos en una posición a la izquierda, se añade un cero a la derecha del uno inicial que no afecta en su valor a la última cifra (igualmente, 752 sería 7x100 + 5x10 + 2x1). Ahora veamos el binario; como tiene dos cifras en lugar de las diez del decimal, es de suponer que el primer dígito, el más a la derecha, valdrá su valor multiplicado por 1 (2 elevado a cero, tal y como en el decimal era 10 elevado a cero). El siguiente dígito será 2 elevado a uno, es decir, 2. Y así irán valiendo 2, 2x2, 2x2x2, etc.',
'2010-02-02', 'Potlitica', '1', '3.jpg'),

('', 'Ensamblador I: Conceptos básicos',
  'Este, es el capítulo más largo probablemente del curso de programación de virus. Programar en ensamblador no es fácil, pero cuando se le coge el tranquillo es extremadamente gratificante;',
  'Este, es el capítulo más largo probablemente del curso de programación de virus. Programar en ensamblador no es fácil, pero cuando se le coge el tranquillo es extremadamente gratificante; estás hablando diréctamente con la máquina, y aquello que le pides, ella lo hace. El control, es absoluto... nada mejor pues, a la hora de programar virus o cualquier tipo de aplicación crítica.',
'2010-02-02', 'Potlitica', '1', '4.jpg'),

('', 'Ensamblador II: Conceptos avanzados',
'En este capítulo vamos a presentar algunos conceptos avanzados en la programación en lenguaje ensamblador, como la relación con la API. También, listaré toda',
'En este capítulo vamos a presentar algunos conceptos avanzados en la programación en lenguaje ensamblador, como la relación con la API. También, listaré toda una serie de instrucciones que me parecen importantes a la hora de programar, y que aún no han sido mencionadas. Todo, irá acompañado de ejemplos de código, que a estas alturas ya deberíamos de saber manejar un poco. Así como los apartados 5.1, 5.2 y 5.3 son bastante importantes, a quienes se vean abrumados por todo esto ya les digo que pueden saltarse tranquilamente el apartado 5.4 (dedicado al coprocesador) . Se van a perder poco si se los saltan en el sentido de que si les resulta ya agotador todo lo aprendido hasta el momento, esto puede que les despiste del verdadero objetivo en el sentido de que no es necesario entenderlo para escribir virus ni para aprender ensamblador; se trata de un poquito de "cultura general" sobre cómo funcionan las cosas internamente (en cualquier caso he intentado dar una visión poco profunda en ese apartado precisamente para no marear a nadie).',
'2010-12-05', 'Potlitica', '1', '5.jpg');


create table usuarios(
id_user int primary key auto_increment,
nombres varchar(50) not null,
usario varchar(10)not null,
clave varchar(10)not null
);
insert into usuarios values
('', 'Juan Bonaparte', 'jaun', '123456'),
('', 'Albert Perez', 'albert', '54321'),
('', 'Bonaparte Eisnten', 'bonap', '7896');
