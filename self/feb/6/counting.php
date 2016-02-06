<?php
$k = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j < $i+$k; $j++) {
        echo $j;
    }
    $k++;
    echo '<br/>';
}