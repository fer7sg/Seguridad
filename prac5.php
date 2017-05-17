<?php
function strToBin($input)
	{
		if (!is_string($input))
		  return false;
		$value = unpack('H*', $input);
		return bindec(base_convert($value[1], 16, 2));
	}
	if(isset($_COOKIE['usuario']))
	{
		$input=$_POST['cad'];
		echo strToBin($input);
	}
	else 
		echo "no tienes permiso para acceder a esta pagina";
?>