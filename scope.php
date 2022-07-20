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
        $var1 = "var1";

        function myFunc($var){
            echo $var;
        }

        myFunc($var1);
    ?>
</body>
</html>