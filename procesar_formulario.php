<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "gym_fit";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Recuperar datos del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$numero_celular = $_POST['numero_celular'];
$acepto_correo = isset($_POST['acepto_correo']) ? 1 : 0;
$acepto_sms = isset($_POST['acepto_sms']) ? 1 : 0;
$acepto_whatsapp = isset($_POST['acepto_whatsapp']) ? 1 : 0;

// Insertar datos en la base de datos
$sql = "INSERT INTO gym (cedula, nombre, email, sexo, fecha_nacimiento, numero_celular, acepto_correo, acepto_sms, acepto_whatsapp)
        VALUES ('$cedula', '$nombre', '$email', '$sexo', '$fecha_nacimiento', '$numero_celular', $acepto_correo, $acepto_sms, $acepto_whatsapp)";

if ($conexion->query($sql) === TRUE) {
    echo "Datos enviados correctamente.";
} else {
    echo "Error al enviar los datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
