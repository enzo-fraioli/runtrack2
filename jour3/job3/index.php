<?php
$str = "I/'m sorry Dave I/'m afraid I can/'t do that"; 
for($i = 0; isset($str[$i]); $i++){
    if($str[$i] == "I" || $str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y"){
        echo "$str[$i]";
    }
}
?>