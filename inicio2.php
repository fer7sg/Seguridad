<?php
	if(isset($_COOKIE['usuario']))
	{	
	echo "gracias por regstrarte";
		echo "<!DOCTYPE>
					<HTML>
					<HEAD>
					</HEAD>
					<BODY>
					<h2>Prácticas</h2>";
			ECHO "</br>
					<a href='prac1inicio.html'/>prac1</a></br>
					<a href='prac2inicio.html'/>prac2</a></br>
					<a href='prac3inicio.html'/>prac3</a></br>
					<a href='prac4inicio.html'/>prac4</a></br>
					<a href='prac5inicio.html'/>prac5</a></br>
					<a href='prac6inicio.html'/>prac6</a></br>
					<a href='prac7inicio.html'/>prac7</a></br>
					<h2>Ejercicios</h2>
					<a href='curpi.html'/>curp</a></br>
					<a href='visainicio.html'/>visa</a></br>
					<a href='pracinicio.html'/>venegre</a></br>";
			ECHO "</BODY>
					</HTML>";
	}
	else
	{
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
		$con=mysqli_connect("localhost","root","","segu");
		$ciudad = mysqli_real_escape_string($con, $usuario);
		$query="SELECT * FROM CUENTAS WHERE usuario like '$usuario';";
		$res=mysqli_query($con,$query);
		$fila=mysqli_fetch_assoc($res);
		echo $fila["contra"];
		if ($fila["contra"]==$contra)
		{
			setcookie("usuario",$usuario,time()+6400,'/');
			echo "<!DOCTYPE>
					<HTML>
					<HEAD>
					</HEAD>
					<BODY>
					<h2>Prácticas</h2>";
			ECHO "</br>
					<a href='prac1inicio.html'/>prac1</a></br>
					<a href='prac2inicio.html'/>prac2</a></br>
					<a href='prac3inicio.html'/>prac3</a></br>
					<a href='prac4inicio.html'/>prac4</a></br>
					<a href='prac5inicio.html'/>prac5</a></br>
					<a href='prac6inicio.html'/>prac6</a></br>
					<a href='prac7inicio.html'/>prac7</a></br>
					<h2>Ejercicios</h2>
					<a href='curpi.html'/>curp</a></br>
					<a href='visainicio.html'/>visa</a></br>
					<a href='pracinicio.html'/>venegre</a></br>";
			ECHO "</BODY>
					</HTML>";
					
		}
		else
				echo "lo sentimos, tus datos son incorrectos. Si no estas registrado da click<a href='registrate.html'> aqui</a>";
	}
?>