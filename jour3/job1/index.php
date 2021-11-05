<?php

$tab = [200, 204, 173, 98, 171, 404, 459];

for($i = 0; isset($tab[$i]); $i++){
    if($tab[$i] % 2 == 0){
        echo "$tab[$i] est paire<br>";
    }
    else{
        echo "$tab[$i] est impaire<br>";
    }
}
?>