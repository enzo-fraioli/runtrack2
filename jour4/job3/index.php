<?php
    $i = 0;
    foreach($_GET as $value){
        $i++;
    }
    echo $i;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>
Formulaire html
</title>
</head>
<body>
<form action="#" method="post">
Votre nom :<input type="text" name="nom">
Votre âge :<input type="text" name="age">
date :<input type="date" name="date">
<p>
<input type=submit value="Envoyer">
</form>
</body>
</html>