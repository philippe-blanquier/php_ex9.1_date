<?php
    declare(strict_types = 1);
    /*  Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).
    */
    $currentDate= date('d/m/y');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.1 Date</title>
    </head>
    <body >
        <p>Date courrant formatée comme 'jj/mm/aaaa': <?= $currentDate ?></p>
    </body>
</html>