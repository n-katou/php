<?php
$scores = [90, 72, 58, 80];
// $scores = $argv[1];
for ($i = 0; $i < count($scores); $i++){
  // if ($scores[$i] >= 80) {
  //   echo "$scores[$i] : A" . PHP_EOL;
  // } elseif ($scores[$i] >= 60) {
  //   echo "$scores[$i] : B" . PHP_EOL;
  // } else {
  //   echo "$scores[$i] : C" . PHP_EOL;
  // }
  $score = $scores[$i];
  if ($score >= 80) {
    echo "$score : A" . PHP_EOL;
  } elseif ($score >= 60) {
    echo "$score : B" . PHP_EOL;
  } else {
    echo "$score : C" . PHP_EOL;
  }
}