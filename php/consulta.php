<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contacto (nombre, apellido, correo, mensaje)
        VALUES('$nombre','$apellido','$correo','$mensaje')";


$ejecutar= mysqli_query($conexion, $sql);
if($ejecutar) {
    echo '
    <script>
        alert("consulta enviada con exito");
        window.location= "../index.php";
    </script>
    ';
} else { '
    <script>
        alert("error al generar la consulta");
        window.location= "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>
