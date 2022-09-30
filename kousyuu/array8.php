<?php
$names = ["Andy", "Betty", "Carol"];
#$nemes[1] = "";
#unset($names[1]);
array_splice($names, 1, 1);

var_dump($names);