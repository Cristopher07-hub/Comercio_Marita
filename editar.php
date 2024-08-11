<?php
$id=$_GET['id'];
?>

<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición del producto</title>
    <link rel ="stylesheet" href="estilop.css">
    <link rel ="stylesheet" href="index.php">
</head>

<body>
<h2 class="ediciondedatos">Edición de datos<h2>
<form method="POST" action="update.php">
<input type="text" placeholder="ID" name="id">
<input type="text" placeholder="Producto" name="producto">
<input type="text" placeholder="Precio Individual" name="precio_individual">
<input type="text" placeholder="Precio Caja" name="precio_caja">
<input type="text" placeholder="Stock" name="stock">
<button class="botonenviar" type="submit">Enviar</button>
<button class="regresar" href="index.php">Regresar</a>



</body>
</html>


