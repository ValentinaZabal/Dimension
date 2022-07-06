<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
$quero = "UPDATE contacto SET nombre = '$nombre', apellido = '$apellido', mensaje = '$mensaje' WHERE correo = '$correo'";
$modificar = mysqli_query($conexion, $quero);

if($modificar) {
    echo '
    <script>
        alert("modificacion realizada con exito");
        window.location= "../index.php";
    </script>
    ';
} else { '
    <script>
        alert("error al modificar la informacion");
        window.location= "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
    
?>