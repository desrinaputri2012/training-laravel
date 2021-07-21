<?php
for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo "Tuing"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo "Ping"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo "Pong"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>