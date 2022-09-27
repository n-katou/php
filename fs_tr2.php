<?php
$scores = [
  [90, 88, 80],
  [64, 72, 72],
  [90, 92, 94]
  ];
$file = "score.csv";
fopen($file, "w");
$handle = fopen($file, "w");
for ($i =0; $i < count($scores); $i++) {
  $score = $scores[$i];
  fputcsv($handle, $score);
  // $line = implode(",",$score); # "90,88,80"
  // fwrite($handle, $line . PHP_EOL);
}
fclose($handle);