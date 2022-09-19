<?php
$score = $argv[1];
// echo $score . PHP_EOL;
// var_dump($argv);

// if ($score >= 80) {
//   echo $score . " : A";
// } elseif (80 > $score && $score >= 60) {
//   echo $score . " : B";
// } else {
//   echo $score . " : C";
// }

if ($score >= 80) {
  echo "$score : A" . PHP_EOL;
} elseif ($score >= 60) {
  echo "$score : B" . PHP_EOL;
} else {
  echo "$score : C" . PHP_EOL;
}