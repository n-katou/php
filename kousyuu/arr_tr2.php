<?php
$scores = ["english" => [90, 72, 58],
            "math" => [80, 82, 78],
            "science" => [94, 66, 80]];

foreach($scores as $key => $value) {
  $value_sum = array_sum($value);
  echo $key . ":" . $value_sum . PHP_EOL;
}