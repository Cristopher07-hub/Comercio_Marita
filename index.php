<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio Marita</title>
    <link rel ="stylesheet" href="conexion.php">
	<link rel ="stylesheet" href="estilop.css">
	
</head>
<body>

<div id="main-container">
	<h3 class="textocategoriacerveza"> Categoría Cerveza</h3>
	<table class="table-1">

	<thead>
		<tr>
			<th>ID</th>	
			<th>Producto</th> 
			<th>Precio Individual</th> 
			<th>Precio Caja</th> 
			<th>Stock</th>
		</tr>
</div>

<?php
    require 'MODEL/conexion.php';
	    //Consultamos:
	    $sql='SELECT * FROM cerveza';
	    //Implementando la consulta y enviando el resultado a $sr:
	    $rs=$db->prepare($sql);
	    $rs->execute();
	    //Recorriendo los registro consultados
	    while ($fila=$rs->fetch()){
?>

<tr>
<br>
	<td><?php echo $fila[0];?></td>
	<td><?php echo $fila[1];?></td>
	<td><?php echo $fila[2];?></td>
	<td><?php echo $fila[3];?></td>
	<td><?php echo $fila[4];?></td>

    <td><a href="editar.php?id=<?php echo $fila[0];?>"><input class="btn-1" type="button" value="Editar"></a></td>
    <td><a href="eliminar.php?id=<?php echo $fila[0];?>"><input class="btn-2" type="button" value="Eliminar"></a></td>
</tr>
<?php }  ?> 

<form method="POST" action="insertar.php">



</body>

</table>
	<table class="table-2">
	<h3 class="textoagregardatos">Agregar datos</h3>

	<thead>
		<tr>
			<td>ID:</td>
			<td><input class="espacioid" type="text" name="txtID"></td>
		</tr>

		<tr>
			<td>Producto:</td>
			<td><input class="espacioproducto" type="text" name="txtProducto"></td>
		</tr>

		<tr>
			<td>Precio Individual:</td>
			<td><input class="espacioprecioindividual" type="text" name="txtPrecioIndividual"></td>
		</tr>

		<tr>
			<td>Precio Caja:</td>
			<td><input class="espaciopreciocaja" type="text" name="txtPrecioCaja"></td>
		</tr>

		<tr>
			<td>Stock:</td>
			<td><input class="espaciostock" type="text" name="txtStock"></td>
		</tr>

		<tr>
			<td><input class="btn-3" type="reset" value="Limpiar"></td>
			<td><input class="btn-4" type="submit" value="Insertar datos"></td>
		</div>
		</tr>
	</table> 

	<h1>Comercio Marita<h1>

</body>
</html>

