<?php
	$usuario=$_POST['usuario'];
	$contra=$_POST['contra'];
	$con=mysqli_connect("localhost","root","","segu");
	$query="INSERT INTO CUENTAS VALUES('$usuario','$contra');";
	$res=mysqli_query($con,$query);
	setcookie("usuario",$usuario,time()+6400,'/');
	echo "Felicidades, con éxito, para ir a menu click <a href='inicio2.php'> aqui</a>";
	
?>