<?php

require_once 'Preferences.php';

$p1 = Preferences::getInstance();
print 'A linguagem é: '. $p1->getData('language') . "<br>\n";
$p1->setData('language', 'pt');
print 'A linguagem é: '. $p1->getData('language') . "<br>\n";
// obtém a mesma instância
$p2 = Preferences::getInstance();
print 'A linguagem é: '. $p2->getData('language') . "<br>\n";
// Descomentar para gravar o valor
 $p1->save();
