<?php

function bubble_Sort($my_array )
{
	do
	{
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $my_array;
}
 $test_array = array(23, -10, 12, -54, 15, 42, -33);
echo "Angka Acak :\n";
echo implode(', ',$test_array );
echo "\nUrutan Angka dari Kecil ke Besar\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>