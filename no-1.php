<?php
	
	function factorial($value){
		if($value <= 0){
			return 1;
		}else{
			$factorial = 1 ;
			for ($i=$value; $i >= 1 ; $i--) { 
				
				$factorial *= $i; 
				
			}
			echo $factorial;
		}
		

	}
	echo factorial(4);
	echo "<br>";
	echo factorial(8);
	

?>