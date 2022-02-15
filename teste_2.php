 <?php
error_reporting(0);
ini_set(“display_errors”, 0 );

 $a=0;
 $b=1;
 $ii=0;
 $contar=100;

 for ($i=1; $i < $contar ; $i++) { 
 	$soma=$a+$b;
 	$a=$b;
 	$b=$soma;
 	$array[]=$soma;
 	$contei=count($array);
 	echo $i."<br>"; 	
 	while($ii < $contei){
 		if ($i == $array[$ii]) {
 			echo "esta dentro do progrma";
 		}
 		$ii++;
 	}
 	echo '<hr>';
 	$ii=0;
 	
 }
	
 	
 






   ?>