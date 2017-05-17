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
	if(isset($_COOKIE['usuario']))
	{
		$cadena=$_POST['cadena'];
		echo jito($cadena);
	}
	else 
		echo "no tienes acceso a esta pagina";
?>