<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
    $_SESSION["nom"] = "VEDRINE";
    $_SESSION["prenom"] = "Nicolas";
    $_SESSION["age"] = 12;

    setcookie("nom", "VEDRINE", time() + (60*60));
?>
<body>
    <?php
        require "menu.php";
        include "paragraphe.php";

        // var_dump($_SERVER["HTTP_HOST"]);

        echo $_COOKIE["nom"];
        // print_r($_COOKIE);
    ?>
</body>
</html>