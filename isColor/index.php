<?php 

declare(strict_types=1);



function isColor(string $color): string {
	
	$color = strtolower($color);
	
	$colors = [
	'Vermelho' => 'red',
	'Verde' => 'green',
	'Azul' => 'blue',
	];
	

	return (in_array($color, $colors)) 
	? "Possui a cor: {$color}."
	: "Não Possui a cor: {$color}.";
	

	
}


 echo isColor('red');

