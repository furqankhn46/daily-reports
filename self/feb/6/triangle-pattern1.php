<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo"*";
    }
    for ($l = 2; $l <= $i; $l++) {
        echo "*";
    }
    echo "&nbsp" . '<br/>';
}
   