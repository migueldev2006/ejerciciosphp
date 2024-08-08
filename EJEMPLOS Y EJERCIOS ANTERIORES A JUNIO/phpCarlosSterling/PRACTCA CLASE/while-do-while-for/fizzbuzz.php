<?php
$i = 1;
for ($i > 1; $i < 100; $i++){
    if($i % 3 == 0){
        echo "$i fizz\n";
    }
    elseif($i % 5 == 0){
        echo "$i buzz\n";
    }
    elseif($i % 3 == 0 and $i % 5 == 0){
        echo "$i fizzbuzz\n";
    }    
}

?>