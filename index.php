<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
    <?php
        // la function prends une paramètre $number 
        function factorial($number) {
            // ici la variable $number return 1 si le nombre est inferieur à 2
            if ($number < 2) {
                return 1;
            } else {
                //ici on return le calcul du factoriel
                return ($number * factorial($number-1));
            }
        }
        // ici on affiche le resultat du nombre dont on veux connaitre le factoriel
        echo "le factoriel du nombre  6 est: " .factorial(6);
    ?> 
    </body>
</html>