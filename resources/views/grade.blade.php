<?php

function gradeArray($nilai) {
   if     ($nilai >= 100)  return "A";
   elseif ($nilai >= 80)  return "B";
   elseif ($nilai >= 70)  return "C";
   elseif ($nilai >= 60)  return "D";
   else                   return "E";
}

$scores = array (100, 80, 70, 60, 50);

echo "<table border='1'><th>Nilai</th><th>Peringkat</th>";

foreach ($scores as $nilai) {
    echo "<tr><td>$nilai</td><td>" . gradeArray($nilai) . "</td></tr>";
}

echo "</table>";
?>