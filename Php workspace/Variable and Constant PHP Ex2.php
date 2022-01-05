<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // String and Integer Constant

        define("NAME","Prasanth");
        define("Age",22);

        echo("Constant Name value is ".NAME."<br/>");
        echo("Constant Age value is ".Age ."<br>");

        // Constant Function

        function constfunc(){
            define("FUNNAME","KUMAR");
            $funcname = FUNNAME;
            ECHO "Function name is $funcname <br/>";
            echo("Constant Age value is ".Age ."<br>");

        }
        constfunc();

        // Magical Function

        echo "Line was ". __Line__."<br>";

        // isset method using ternary operator

        $gender='male';
        echo isset($gender)?"variable set":"variable is not set";

    ?>

</body>
</html>