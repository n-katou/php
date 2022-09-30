<?php
$colors = ["Red", "Green", "Blue"];
for ($i=0; $i < count($colors); $i++) {
  $up = strtoupper($colors[$i]);
  echo $up . PHP_EOL;
}