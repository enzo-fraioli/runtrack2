<?php
for ($p = 0; $p <= 1337; $p++) 
{
    if ($p == 42) {
    echo "<b><u>$p</b></u><br>";
}
    elseif ($p != 42) {
    echo $p, '<br>';
    }
}
?>