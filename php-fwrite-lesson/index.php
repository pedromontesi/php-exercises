<?php

$fp = fopen('Diretório do seu arquivo.txt', 'w');

fwrite($fp, "Linha 1" . PHP_EOL);

fwrite($fp, "Linha 2" . PHP_EOL);

fwrite($fp, "Linha 3" . PHP_EOL);

fclose($fp);


