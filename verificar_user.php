<?php
session_start();
require ("conex.php"); //es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/
$user= $password="";
	//comprobacion de metodo post and get
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$username=$_POST['user'];
		$password=$_POST['password'];
		}



if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: intropage.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['user']) && !empty($_POST['password'])) {
 $username=$_POST['user'];
 $password=$_POST['password'];






echo "SELECT * FROM usuarios WHERE usuario='".$username."' AND password='".$password."'";
$query =mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario='".$username."' AND password='".$password."'");





 while($row=mysql_fetch_assoc($query))
 {
 $username=$row['user'];
 $password=$row['password'];
 }

if($username == $username && $password == $password)

{

 $_SESSION['session_username']=$username;

/* Redirect browser */
 header("Location: intropage.php");

}

}

}


?>