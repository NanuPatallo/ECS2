<?php
/*Evaluación conceptual de situación N2 
Crear un repositorio en GitHub llamado ECS2 ok
Clonar el repositorio dentro del root del servidor PHP. ok
Agregar un archivo index.php ok
Resolver el siguiente enunciado dentro del archivo index.php
Recibir dos variables mediante post. ok
Dni (obligatoria, si no se envía devolver el mensaje. “DNI obligatorio.”) 
Email.
Devolver:
Dni: [valorDNI]
Email: [valorEmail] (En caso de no enviar el mail, no mostrar nada, tampoco el label Email)
Realizar el commit de los cambios, con el mensaje “Dni y email”
Pushear los cambios al repositorio remoto.
Para entregar la evaluación copiar el link del repositorio.*/

if (isset($_POST['DNI']) == false) {
    echo 'DNI => ¡Obligatorio!';
} else {
    echo 'DNI: ' . $_POST['DNI'];
    echo '<hr>';
    if (isset($_POST['E-mail'])) {
        echo 'E-mail: ' . $_POST['E-mail'];
    }
}
