<?php
	$nom=$_POST['nom'];
	$fe=$_POST['fechnac'];
	$sex=$_POST['sexo'];
	$lug=$_POST['lugnac'];
	$c1=$_POST['codper0'];
	$c2=$_POST['codper1'];
	
	$n1=substr($nom,0,2);
	
	$n21=strpos($nom," ");
	
	$n2=substr($nom,($n21+1),1);
	
	$n31=substr($nom,($n21+1));
	
	$n32=strpos($n31," ");
	
	$n3=substr($n31,($n32 +1),1);
	
	echo $n1.$n2.$n3."</br>";
	
	echo $fe."</br>";
	$fe1=substr($fe,2,2);
	$fe2=substr($fe,5,2);
	$fe3=substr($fe,8,2);	
	echo $n1.$n2.$n3.$fe1.$fe2.$fe3;
	$sexi=substr($sex,0,1);
	echo $sexi;
	echo $lug."</br>";
	
	$con=array('b','c','d','f','g','h','j','k','l','m','n','ñ','p','q','r','s','t','v','w','x','y','z');
	
	$nomb1=substr($nom,1);
	$com=str_split($nomb1);
	$lel=count($com);
	$r="";
	for($w=0;$w<$lel;$w++)
	{
		$r=$com[$w];
		foreach($con as $cnt)
		{if($r===$cnt)
			echo $r;
				break;
				
		}
	}
	echo $r;
	
	
	/*function tres($nomb)
	{
		$nomb1=substr($nomb,1);
		$c=count($nomb1);
		$nnom=str_split($nomb1,$c);
		echo "</br>";
		print_r($nnom);
		//$t=count($nnom);
		$pru=array('b','c','d','f','g','h','j','k','l','m','n','ñ','p','q','r','s','t','v','w','x','y','z');
		foreach($pru as $cs)
		$res=array_search($cs,$nnom);
		echo "</br>ii".$res."ggg";
		//print_r($nnom[$res]);		
	}
	echo tres($nom);*/
	
	/*$con11=substr($nom,1);
	echo $con11."</br>";
	
	$con12=strpos($con11,$voca);
	echo $con12."fdfg</br>";
	$con1=substr($con11,$con12,1);
	echo $con1."</br>";

	$con21=substr($nom,($n21+1));
	echo $con21."</br>";
	$con22=strpos($con21,".$voca.");
	echo $con22."lel</br>";
	$con2=substr($con21,$con22,1);
	echo $con2."sf</br>";

	$con31=substr($nom,($n32+1));
	$con32=strpos($con31,$voca);
	$con3=substr($con31,$con32,1);
	echo $con3."as</br>";*/		
?>
