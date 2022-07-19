<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cours</title>
</head>
<body>
    <?php 
    
        // ma première déclaration de variable en PHP.
        /**
         * Je veux mettre
         * un texte sur plusieurs lignes.
         */
        $nom = "VEDRINE";
        $prenom = "Nicolas";

        echo $nom;
        echo "<br>";
        echo $prenom;
        echo "<br>";
        $nomComplet = $prenom . " " . $nom;
        echo $nomComplet;
        echo "<br>";
        var_dump($nomComplet);
    
    ?>
</body>
</html>