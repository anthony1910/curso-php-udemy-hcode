<?php

// position

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

// var_dump($q);
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra));

echo "<br/>";

var_dump($texto2);

?>