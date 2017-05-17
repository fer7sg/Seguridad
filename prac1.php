<?php
	$pri=$_POST['pri'];
	$seg=$_POST['seg'];
	
	function mod($a,$b)
	{
		if($b==0)
			$c="b no puede ser 0";
		else
			if ($a>0)
				$c=$a%$b;	
			else
				if($b>0)
				{
					$d=$a/$b;
					$d=ceil($d);
					$d--;
					echo $d;
					$c=$a-($b*$d);
				}
				else
				{
					$d=$a/$b;
					$d=ceil($d);
					$c=$a-$b*$d;
				}
		return $c;
	}
	if (isset($_COOKIE['usuario']))
	{	
		$res=mod($pri,$seg);
		echo "</br>".$res;
	}
	else
		echo "lo siento,no haz iniciado sesion";
		
?>