<?php
include "UnaDos.php";

$a = new Una(new Dos());

echo new Dos() . "\n";
echo $a . "\n";
echo $a->getDos()->getInfo() . "\n";
echo $a->getInfo() . "\n";