<?php

	function reverseString($string){
		$jumlah_string = strlen($string);

		for ($i=$jumlah_string; $i >= 0 ; $i--) { 

			echo $string[$i];
			
		
		}

	}


	echo reverseString('agus');

?>