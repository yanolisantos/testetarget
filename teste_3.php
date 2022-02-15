<?php 

$json=[
	[
		"dia"=> 1,
		"valor"=> 22174.1664
	],
	[
		"dia"=> 2,
		"valor"=> 24537.6698
	],
	[
		"dia"=> 3,
		"valor"=> 26139.6134
	],
	[
		"dia"=> 4,
		"valor"=> 0.0
	],
	[
		"dia"=> 5,
		"valor"=> 0.0
	],
	[
		"dia"=> 6,
		"valor"=> 26742.6612
	],
	[
		"dia"=> 7,
		"valor"=> 0.0
	],
	[
		"dia"=> 8,
		"valor"=> 42889.2258
	],
	[
		"dia"=> 9,
		"valor"=> 46251.174
	],
	[
		"dia"=> 10,
		"valor"=> 11191.4722
	],
	[
		"dia"=> 11,
		"valor"=> 0.0
	],
	[
		"dia"=> 12,
		"valor"=> 0.0
	],
	[
		"dia"=> 13,
		"valor"=> 3847.4823
	],
	[
		"dia"=> 14,
		"valor"=> 373.7838
	],
	[
		"dia"=> 15,
		"valor"=> 2659.7563
	],
	[
		"dia"=> 16,
		"valor"=> 48924.2448
	],
	[
		"dia"=> 17,
		"valor"=> 18419.2614
	],
	[
		"dia"=> 18,
		"valor"=> 0.0
	],
	[
		"dia"=> 19,
		"valor"=> 0.0
	],
	[
		"dia"=> 20,
		"valor"=> 35240.1826
	],
	[
		"dia"=> 21,
		"valor"=> 43829.1667
	],
	[
		"dia"=> 22,
		"valor"=> 18235.6852
	],
	[
		"dia"=> 23,
		"valor"=> 4355.0662
	],
	[
		"dia"=> 24,
		"valor"=> 13327.1025
	],
	[
		"dia"=> 25,
		"valor"=> 0.0
	],
	[
		"dia"=> 26,
		"valor"=> 0.0
	],
	[
		"dia"=> 27,
		"valor"=> 25681.8318
	],
	[
		"dia"=> 28,
		"valor"=> 1718.1221
	],
	[
		"dia"=> 29,
		"valor"=> 13220.495
	],
	[
		"dia"=> 30,
		"valor"=> 8414.61
	]
];
$contei=count($json);
$i=0;
$valormaior=0;
$valormenor=0;
$zero=0;
$valortotal=0;

while($contei > $i){
    
    if ($json[$i]["valor"] > $valormaior) {
        $valormaior=$json[$i]["valor"];
        $valortotal=$valormaior+$valortotal;
        

    }else{
        $valormaior=$valormaior;
        $valortotal=$valormaior+$valortotal;
    }
    $valormenor=$valormaior;
    if ($json[$i]["valor"] < $valormenor && $json[$i]["valor"] != 0.0) {
        $valormenor=$json[$i]["valor"];

    }else{
        $valormenor=$valormenor;
    }
    if ($json[$i]["valor"] == 0.0) {
            $zero++;
        }

$i++;

}
echo number_format($valormaior,2);
echo ' ESTE E O VALOR MAIOR ENTRE OS '.$contei." DIAS";
echo '<hr>';
echo number_format($valormenor,2);
echo ' ESTE E O VALOR MENOR ENTRE OS '.$contei." DIAS";
echo '<hr>';
echo number_format($valortotal,2);
echo ' ESTE E O SOMA DOS '.$contei." DIAS";
echo '<hr>';
$diapelooutro=$valortotal / ( $contei-$zero);
echo number_format($diapelooutro,2);
echo ' FATURAMENTO CALCULADO POR '.($contei - $zero)." DIAS";
echo '<hr>';
echo 'ESTE SÃO AS QUANTIDADES DE DIAS SEM FATURAMENTO SÃO '.$zero." DIAS";
    










 ?>