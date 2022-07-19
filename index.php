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
        echo "<br>";

        $age = 12;
        $phrase = "Bonjour, je m'appelle " . $nomComplet . ". J'ai " . $age . " ans.";
        echo "<br>";
        echo strlen($nomComplet);
        echo "<br>";
        echo str_word_count($phrase);
        echo "<br>";
        echo strpos($phrase, "j");
        echo "<br>";
        echo strrev($phrase);
        echo "<br>";
        echo str_replace("12", "41", $phrase);
        echo "<br>";

        $bool = true;
        var_dump($bool);
        echo "<br>";
        $condition = 2 < 1;
        var_dump($condition);

    
    ?>
</body>
</html>