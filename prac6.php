<?php
	function simetrico($cad,$clave)
	{
		echo $cad."<br/>";
		$simetrico = $cad^$clave;
		echo $simetrico;
		echo $simetrico^$clave;
	}
	if(isset($_COOKIE['usuario']))
	{
		$cad=$_POST['cad'];
		$clave=$_POST['clave'];
		echo simetrico($cad,$clave);
	}
	else
		echo "no tienes acceso a esta pagina";
?>