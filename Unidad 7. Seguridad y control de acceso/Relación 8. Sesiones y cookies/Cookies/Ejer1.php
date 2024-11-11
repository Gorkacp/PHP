<?php 
// Desarrollaremos un sencillo contador personal de accesos a una página empleando la técnica de envío y recuperación de cookies. 
// De esta forma, el valor del contador se almacenará en el cliente, no siendo necesario el almacenamiento de ningún tipo de 
// información en el servidor. El funcionamiento es trivial: cada vez que se accede a la página, el script recupera el valor 
// de la cookie y la reenvía con el contador incrementado. De esta forma, cuando el cliente accede al script, éste no tiene 
// más que acceder al valor de la cookie para determinar cuántas veces ha visitado dicho cliente la página en cuestión.

// Usaremos una cookie para almacenar el número de veces que un usuario ha visitado la página. 

// Si la cookie no existe, la crea con valor "1"
// Si ya existe lee su valor para mostrar el mensaje y reescribe la variable para sumarle 1 al valor actual
// La primera vez que se acceda al script se obtendrá la salida " Bienvenido por primera vez". La siguiente, "Bienvenido por 2 vez", y así sucesivamente.

// Añade un vínculo para borrar la cookie
// Recuerda que los navegadores ofrecen la posibilidad de ver las cookies almacenadas en el ordenador.





?>