<?php
    
	

    function getAngka($string){
        $outputString = preg_replace('/[^0-9]/', '', $string);  
        echo $outputString;
        echo "<br>";
        $jumlahstring = strlen($outputString);

            for ($i=$jumlahstring ; $i >= 1 ; $i--) { 
                echo $outputString[$jumlahstring-$i];
                for ($j=$i; $j>1 ; $j--) { 
                    echo 0;
                }
                echo "<br>";
            }
    }

    echo getAngka("9.86-A5.321");
    
?>