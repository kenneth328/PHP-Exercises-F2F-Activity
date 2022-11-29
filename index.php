<?php

	$dupcount = 0;
		echo "write a PHP script to count a total number of duplicate elements in an array. \n";

		$size = (int)readLine('Input number of elements to be stored...: ');
		$arrayCon = array($size);
			echo "\n";
			for($i = 1; $i <= $size; $i++){
				$i-=1;
				$arcon = (int)readline('element - '. $i . ': ');
				$i+=1;
				$arrayCon[$i] = $arcon;
		}

			for($i = 0; $i < $size; $i++){
				for($j = $i; $j <= $size; $j++){
					if($arrayCon[$i] == $arrayCon[$j] && $i != $j){
					$dupcount++;
					}	
				}

			}
	
			echo('Total Number of Duplicates elements found is : '. $dupcount . "\n");
			echo "\n";
			echo "\n";

			?>