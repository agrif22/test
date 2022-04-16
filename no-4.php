<?php

    function swap($a , $b){
        $a = $a+$b;
        $b= $a-$b;
        $a= $a-$b;

        echo "a =".$a." b = ".$b;
    }

    echo swap(3,7);
?>