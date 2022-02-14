<?php 

	$json=[
		[
			"estado"=>"SP",
			"valor"=>"67836.43"
		],
		[
			"estado"=>"RJ",
			"valor"=>"36678.66"
		],
		[
			"estado"=>"MG",
			"valor"=>"29229.88"
		],
		[
			"estado"=>"ES",
			"valor"=>"27165.48"
		],
		[
			"estado"=>"Outros",
			"valor"=>"19849.53"
		]



			];
$i=0;
$soma=0;

$contei=count($json);
while ($i < $contei) {
				$valor=$json[$i]["valor"];
				$soma=$valor+$soma;
				$i++;
			}	
	$i=0;				
while($i < $contei)	{
	echo "o valor em porcentagem é de ".(number_format($json[$i]["valor"]/$soma*100,2))." DE ".$json[$i]["estado"]."<br>";
	$i++;
}		


 ?>