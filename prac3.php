<?php

	function ircol($col,$cad)
	{
		$str1=$cad;
		$str=str_replace(" ","",$cad);	
		$x=strlen($str);
		$div=$x/$col;
		$sid=$x%$col;
		if($sid!=0)
			{
			$o=$col-$sid;
			$str=str_pad($str,($x+$o), "-");
			$x=strlen($str);
			$div=$x/$col;
			}
		echo "</table>";
		$arr= str_split($str);
		echo "</br>";
		$y=0;
		$m=$div;
		$n=$col;
		echo "<br/><table>";
		for ($div=1;$div<=$m;$div++)
			{
			echo "<tr>";
			for ($col=1;$col<=$n;$col++)
				{
					echo "<td>$arr[$y]<td>";
					$y++;
				}
			echo "</tr>";
			}
		echo "</table></br>";
		
		$colci=$col-1;
		$divci=$div-1;
		$e=$colci;
		$d=$divci;
		$fra=array_chunk($arr,$colci);
		echo "</br>";
		for ($colci=0;$colci<$e;$colci++)
		{for($d=0;$d<$divci;$d++)
				print_r($fra[$d][$colci]);
			echo " ";		
		}
	}
	if(isset($_COOKIE['usuario']))
	{
		$cade=$_POST['cadena'];
		echo ircol(4,$cade);
	}
	else
		echo "no tienes acceso a esta pagina";
?>