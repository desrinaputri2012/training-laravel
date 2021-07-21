<?php

function check($number){
    if($number % 2 == 0){
        echo "Genap"; 
    }
    else{
        echo "Ganjil";
    }
}

$number = 40;
check($number)
?>