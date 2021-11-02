<?php
$str="string";

$bool= true;

$int= 42;

$float=6.9;
?>

<table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>effet</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype ($str); ?></td>
            <td><?php echo $str ?></td>
            <td>chaine de charactere</td>
        </tr>

        <tr>
            <td><?php echo gettype ($bool); ?></td>
            <td><?php echo $bool ?></td>
            <td> valeur vraie ou fausse</td>
        </tr>

        <tr>
        <td><?php echo gettype ($int); ?></td>
            <td><?php echo $int ?></td>
            <td>Détermine si une variable est de type nombre entier</td>
            </tr>

        <tr>
        <td><?php echo gettype ($float); ?></td>
            <td><?php echo $float ?></td>
            <td>Permet d'afficher les nombres à virgule</td>
        </tr>
    </tbody>

<style>
table,td {
    border: 2px solid;

    color: black;

}