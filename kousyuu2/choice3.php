<?php
$dice = 2;

if ($dice >= 5) {
  echo "win";
} elseif ($dice >= 3) {
  echo "Draw";
} elseif ($dice >= 2) {
  echo "Draw2";
} else {
  echo "Lose";
}
