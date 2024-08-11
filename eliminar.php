<?php 
$id = $_GET['id'];
require 'MODEL/conexion.php';
$sql = "DELETE FROM cerveza WHERE ID = ?";
$rs = $db->prepare($sql);
$rs->execute([$id]);
header('Location: '."index.php");