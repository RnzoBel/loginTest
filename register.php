<?php require("conex.php"); ?>


 <?php

if(isset($_GET["register"])){

if(!empty($_GET['full_name']) && !empty($_GET['email']) && !empty($_GET['username']) && !empty($_GET['password'])) {
 $full_name=$_GET['full_name'];
 $email=$_GET['email'];
 $username=$_GET['username'];
 $password=$_GET['password'];

 $query=mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario='".$username."'");
 $numrows=mysqli_num_rows($query);

 if($numrows==0)
 {
 $sql="INSERT INTO usuarios (usuario, password, full_name, email )
 VALUES('$username', '$password', '$full_name','$email')";

$result=mysqli_query($connect, $sql);

 if($result){
 $message = "Cuenta Correctamente Creada";
 header('location: index.html');
 } else {
 $message = "Error al ingresar datos de la informacion!";

 }

} else {
 $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
 }

} else {
 $message = "Todos los campos no deben de estar vacios!";
}
}
?>




