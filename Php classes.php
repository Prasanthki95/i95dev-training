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
     class Details{
         public $name;
         public $age;
     }

     $obj = new Details();
     $obj->name = "Prasanth";
     $obj->age = 22;

     echo "$obj->name<br/>";
     echo "<br/>";
     echo "$obj->age<br/>";


     class students{
         public $name;
         private $avg;

         function __construct($name,$avg){
             $this->name = $name;
             $this->avg = $avg;
         }

         function setter($avge){
             $this->avg = $avge;
         }
         function getter(){
             return $this->avg;
         }
     }

     $stud = new students("Santhosh",8);
    //  $stud->avg=3;

     echo "$stud->name<br/>";
     $stud->setter(5);
    echo $stud->getter();

    class chef{
        function dish(){
            echo "Normal dish<br/>";
        }
        function specialdish(){
            echo "Barly Chicken<br/>";
        }
    }

    class Italianchef extends chef{
        function specialdish(){
            echo "Grill Chicken<br/>";
        }
    }

    $chefs = new Italianchef();
    $chefs->dish();
    $chefs->specialdish();


    ?>
</body>
</html>