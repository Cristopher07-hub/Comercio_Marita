<?php
// Datos de la conexión
$host = 'localhost';
$db = 'comercio_marita';
$user = 'root';
$pass = '';

try {
    // Creando una nueva conexión PDO
    $db = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Configurando el modo de error de PDO para que lance excepciones
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejando errores de conexión
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}
?>