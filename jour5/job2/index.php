<?php
$jour = NULL;
function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }
    if($jour == false){
        echo "Bonsoir";
    }
}
bonjour(false);
bonjour(true);
?>