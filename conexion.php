<?php
    $contraseña="";
    $usuario="root";
    $nombredb="dbg1v2";

    try{
        $db=new PDO('mysql:host=localhost;dbname=' .$nombredb,$usuario,$contraseña);
        // echo "<script>alert('La conexion se realizo correctamente')</script>";
    } catch (Exception $e) {
        echo "<script>alert('La conexion fallo')</script>".$e->getMessage();
    }
?>

