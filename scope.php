<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scope</title>
</head>
<body>
    <?php
        $jourDeLaSemaine = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
        define("URL_SITE", $jourDeLaSemaine);

        $var1 = "var1";

        function myFunc(){
            static $i = 0;
            $i++;
            echo $i;
            echo "<br>";
            var_dump(URL_SITE);
        }

        // myFunc();
        // myFunc();
        myFunc();
        // echo URL_SITE;
    ?>
</body>
</html>