<?php
$id=$_POST['id'];
$producto=$_POST['producto'];
$precio_individual=$_POST['precio_individual'];
$precio_caja=$_POST['precio_caja'];

$stock=$_POST['stock'];
require 'MODEL/conexion.php';
$sql = "UPDATE cerveza SET Producto = ?, Precio_Individual = ?, Precio_Caja = ?, Stock = ? WHERE ID=?;";
$rs = $db->prepare($sql);
$rs->execute([$producto,$precio_individual,$precio_caja,$stock,$id]);
header('Location: '."index.php");

?>
