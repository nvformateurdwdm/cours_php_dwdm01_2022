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

        function myFunc(){
            static $i = 0;
            $i++;
            echo $i;
            echo "<br>";
        }

        myFunc();
        myFunc();
        myFunc();
    ?>
</body>
</html>