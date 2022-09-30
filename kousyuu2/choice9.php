<?php
$diceA = 6;
$diceB ="6";

$diceC = (int)$diceB; #キャストという

if ($diceA === $diceC) {
  echo "Win"; 
} else {
  echo "Lose";
}