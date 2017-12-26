<?php
	function merge(Array $a, Array $b, $count){
		
	}

	function merge_array(Array $a, Array $b){
		$res = [];
		$a_len = count($a);
		$b_len = count($b)

		if($a_len == $b_len) {
			echo "Arrays are equal";
			for($i = 0; $i < $a_len; $i++){
				$res[$a[$i]] = $b[$i];
			}	
		} else {
			echo "Array aren't equal";
			if ($a_len > $b_len){
				echo "Array a is bigger";
				for(i = 0; $i < $b_len; $i++){
				$res[$a[$i]] = $b[$i];
				}
			}else {
				echo "Array b is bigger";
				for($i = 0; $i < $b_len; $i++){
					
				}
			}

			}
		}

		return[];
	}

	function merge_array_compact(){

	}

	#merge_array([], []);