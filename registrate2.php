<?php
	function jito($cad)
	{
		$y=0;
		$x=strlen($cad);
		if($x<8)
			$str="no es valida, por una más larga";
		else 
		{
			$y=floor($x/2);
			$m=substr($cad,1,($y-1));
			$n=substr($cad,($y+1),$x);
			$str=$m.$n;
		}
		return $str;
	}
	$usuario=$_POST['usuario'];
	$val=$_POST['contra'];
	$contra=jito($val);
	$con=mysqli_connect("localhost","root","","segu");
	$query="INSERT INTO CUENTAS VALUES('$usuario','$contra');";
	$res=mysqli_query($con,$query);
	setcookie("usuario",$usuario,time()+6400,'/');
	echo "Felicidades, con éxito, para ir a menu click <a href='inicio2.php'> aqui</a>";
	
?>
