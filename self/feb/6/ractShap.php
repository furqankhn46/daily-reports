<?php

for ($i = 1; $i <= 5; $i++) {

    for ($j = $i; $j <= 5; $j++) {
        if($i > 1){
            if($i == $j){
                echo "#";
            } else {
                echo ($j==5) ? "&nbsp&nbsp" : "&nbsp&nbsp ";
            }
        } else {
            echo "#";
        }
        
    }
    
    for ($k = 1; $k < $i; $k++) {
        if($i < 5){
            if($i == ($k+1)){
                echo "#";
            } else {
                echo ($k==2) ? "&nbsp&nbsp&nbsp" : "&nbsp&nbsp ";
            }
        } else {
            echo "#";
        }
    }
    
    echo "<br>";
}


