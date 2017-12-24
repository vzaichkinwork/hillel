<?php
	$array = [1, 2, 3, -5, 23];

	sort($array);

	function custom_array_sum($arr){
		$res = 0;

		foreach ($arr as $value) {
			$res += $value;
		}

		return $res;
	}

	echo custom_array_sum($array);

	echo "test";

	/*for ($i = 0;  $i < count($array); $i++) 
	{ 
		echo $array[$i] . '</br>';
	}
*/
	/*echo 'before loop <br>';

	foreach ($array as $elem) 
	{
		if ($elem % 2 == 0)
		{
			continue;
		}
		echo $elem . '</br>';
	}

	echo 'after loop <br>';*/


?>