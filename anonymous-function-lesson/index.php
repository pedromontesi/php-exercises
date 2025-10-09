<?php

$remove_acento = function($str) {

$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê',

'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'à',

'á', 'â', 'ã', 'ç', 'è', 'é', 'ê', 'í', 'î',

'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û', 'ü');

$b = array('A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E',

'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'a',

'a', 'a', 'a', 'c', 'e', 'e', 'e', 'i', 'i',

'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u');

return str_replace($a, $b, $str);

};

print $remove_acento('José da Conceição');

print '<br>' . PHP_EOL;

$palavras = array();

$palavras[] = 'José da Conceição';

$palavras[] = 'Jéferson Araújo';

$palavras[] = 'Félix Júnior';

$palavras[] = 'Ênio Müller';

$palavras[] = 'Ângelo Ônix';


$r = array_map( $remove_acento, $palavras );

print_r($r);
