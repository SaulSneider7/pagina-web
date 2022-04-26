
<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM usuario where Usser='$usuario' and Pasword='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("home.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h4 class="bad" style="color: black;">ERROR DE AUTENTIFICACION</h4>
  <?php
}
mysqli_free_result($resultado); 
mysqli_close($conexion);