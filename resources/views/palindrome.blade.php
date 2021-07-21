<?php

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 

$words = "Kasur ini rusak";
if(Palindrome($words)){ 
    echo "$words : true"; 
}
else { 
echo "$words : false"; 
}
?> 