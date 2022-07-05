<?php

include 'conexion_be.php';

$correo = $_POST['correo'];

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$query = "DELETE FROM contacto WHERE correo = '$correo'";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
    <script>
        alert("inscripción borrada con éxito");
        window.location= "../index.php";
    </script>
    ';
} else { '
    <script>
        alert("error al borrar la inscripción");
        window.location= "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>
