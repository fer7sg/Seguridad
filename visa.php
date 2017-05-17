<?php
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
	//$visa=$_POST['visa'];
	$visa="a012888888881881";
	if(preg_match('/[0-9]/',$visa))
		echo "cool</br>";
	else 
		echo "no cool";
	$visa1=str_split($visa);
	$cuenta=0;
	$r=0;
	for ($t=0;$t<=14;$t++)
	{
		if(($t%2)==0)
		{
			$co=$visa1[$t];
			$co=$co*2;
			$cuenta=$cuenta+$co;
			if($co>=10)
				$r=$r+1;
			
		}	
		else //(t%2)!=0
		{
			$co=$visa1[$t];
			$cuenta=$cuenta+$co;
		}
	}
	$cuenta=$cuenta*-1;
	$op=$cuenta-$r;
	
	$res=mod($op,10);
	echo "</br>".$res;
	
?>