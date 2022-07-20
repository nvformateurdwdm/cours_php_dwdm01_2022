<!DOCTYPE html>
<html lang="en">
<?php
    include "head.php";
    $_SESSION["nom"] = "VEDRINE";
    $_SESSION["prenom"] = "Nicolas";
    $_SESSION["age"] = 12;
?>
<body>
    <?php
        require "menu.php";
        include "paragraphe.php";

        // var_dump($_SERVER["HTTP_HOST"]);
    ?>
</body>
</html>