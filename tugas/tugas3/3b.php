<?php

function urutanAngka($angka){
    $variable = 1;
    for ($i=1; $i <= $angka ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo "$variable " ;
            $variable++;
        }
        echo " <br>";
    }
    return;
}
echo urutanAngka(5);

?>