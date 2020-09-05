<?php
$string = 'mateo';
$broj = 0;
$reverse = '';
while(!empty($string[$broj])){
$reverse = $string[$broj].$reverse;
$broj++;
}
echo $reverse;
