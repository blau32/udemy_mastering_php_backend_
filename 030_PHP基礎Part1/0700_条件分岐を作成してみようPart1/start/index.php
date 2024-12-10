<?php 
$score = 100;
$absent = 3;

if($absent >= 5 || $score < 50) {
  echo 'Fail';
}
else if($score < 70) {
  echo 'Success';
}
else {
  echo 'Excellent';
}