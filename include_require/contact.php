<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
?>
<body>
    <?php
        require "menu.php";

        include "paragraphe.php";

        if(isset($_GET["prenom"]) && isset($_GET["nom"]) && isset($_GET["age"])){
            echo "<h1>Bonjour, je m'appelle " . $_GET["prenom"] . " " . $_GET["nom"] . "." . "<br>J'ai " . $_GET["age"] . " ans." . "</h1>";
        }

        if(isset($_POST["prenom"])){
            echo "<h1>Bonjour, je m'appelle " . $_POST["prenom"] . " " . $_POST["nom"] . "." . "</h1>";
        }
        
    ?>
</body>
</html>