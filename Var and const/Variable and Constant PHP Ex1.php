<html>

<head>

</head>
<body>
    <h1>About Me:</h1>

    <?php
        // Defining the variables

        $name = "Prasanth";
        echo "Name is $name <br/>";

        // Changing the variable
        
        $name = 20;
        echo "Name after change $name <br/>";

        // Static variable

        function sum(){
            static $value = 1;
            echo "Sum is $value <br/>";
            $value += 1;
        }
        sum();
        sum();
        sum();

        // Global variables

        global $gvalue;
        $gvalue = 10;
        function Gvalue(){
            global $gvalue;
            echo "global value is:$gvalue <br/>";
        }
        Gvalue();

        // Super Global

        function display(){
            $name = $GLOBALS['name'];
            echo "Printing it inside the function $name <br/>";
        } 
        display();

        // variables of variables

        $name1 = "Prasanth";
        $name2 = "name1";
        $name3 = "name2";
        echo $$$name3;

        
    ?>

</body>

</html>
