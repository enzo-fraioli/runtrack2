<?php
function occurence($str, $char){
    $p = 0;
    for($i = 0; isset($str[$i]); $i++){
        if($str[$i] == $char){
            $p++;
        }
    }
    return $p;
}
echo occurence("une chainnnnne", "n");
?>