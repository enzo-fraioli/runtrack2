<?php
$p = -1;
    while($p <= 99)
    {
        $p++;

        switch($p){
            case ($p < 21):
                echo "<i>$p</i><br>";
                break;
            case ($p > 20 && $p < 25):
                echo "$p<br>";
                break;
            case ($p == 42):
                echo "La Plateforme_<br>";
                break;
            case ($p > 24 && $p < 51):
                echo "<u>$p</u><br>";
                break;
            case ($p > 50):
                echo "$p<br>";
                break;
        }
    }
?>