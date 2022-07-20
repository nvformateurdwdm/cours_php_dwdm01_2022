<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
?>
<body>
    <?php
        require "menu.php";

        include "paragraphe.php";

        // echo "<h1>Bonjour, je m'appelle " . $_GET["prenom"] . " " . $_GET["nom"] . "." . "<br>J'ai " . $_GET["age"] . " ans." . "</h1>";
        
        echo "<h1>Bonjour, je m'appelle " . $_POST["prenom"] . " " . $_POST["nom"] . "." . "</h1>";
        
    ?>
</body>
</html>