<?php

function FierroAlv(){
    for ($i=0; $i < 101; $i++) { 
        if ($i % 3 == 0){
        echo "Peso\n";
        }if ($i % 5 == 0){
        echo "Pluma\n";
        }if ($i % 3 == 0 && $i %5 == 0){
        echo "PesoPluma\n";
        }
        
    }
}

echo FierroAlv();