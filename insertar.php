<?php
  include 'MODEL/conexion.php';
  $id=$_POST['txtID'];
  $producto=$_POST['txtProducto'];
  $precio_individual=$_POST['txtPrecioIndividual'];
  $precio_caja=$_POST['txtPrecioCaja'];
  $stock=$_POST['txtStock'];
 
  $sql="INSERT INTO cerveza (ID,Producto, Precio_Individual, Precio_Caja,Stock) VALUES (?,?, ?, ?, ?)";
  $rs=$db->prepare($sql);
  $rs->execute([$id,$producto,$precio_individual,$precio_caja,$stock]);

  if ($rs==TRUE){
    echo 'Datos insertados correctamente';

  }else{
    echo 'Error al insertar';
  }
  header('Location: '."index.php");
?>