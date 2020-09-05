<?php
function factorial(int $num){
    $rez = $num;
    $broj = --$num;
 while($broj>0){
     $rez *= $broj ;
     $broj--;

 }
     echo $rez;
}

factorial(4);