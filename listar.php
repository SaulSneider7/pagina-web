<?php
 include_once("conexion.php");

 $sentencia_cliente=$db-> query("select * from vista_cliente;");
 $usuarios=$sentencia_cliente->fetchAll(PDO::FETCH_OBJ);
//  print_r($usuarios);

$sentencia_producto=$db-> query("select * from vista_producto;");
$productos=$sentencia_producto->fetchAll(PDO::FETCH_OBJ);
//  print_r($productos);

?>