<?php
	if(isset($_COOKIE['usuario']))
	{
		$qpi=$_POST['qpi'];
		$wutt=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
		//$lel=array("b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","a");
		$wut=array("a"=>"b","b"=>"c","c"=>"d","d"=>"e","e"=>"f","f"=>"g","g"=>"h","h"=>"i","i"=>"j","j"=>"k","k"=>"l","l"=>"m","m"=>"n","n"=>"ñ","ñ"=>"o","o"=>"p","p"=>"q","r"=>"s","s"=>"t","t"=>"u","u"=>"v","v"=>"w","w"=>"x","x"=>"y","y"=>"z","z"=>"a");
		$uy=str_replace($wut,$wutt,$qpi);
		echo $uy;
	}
	else
		echo "no tienes acceso a esta pagina";
?>