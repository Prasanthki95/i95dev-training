<?php

// Assignment Operator

    $value1 = 10;
    $value2 = 20;
    $result = $value1 + $value2;
    echo $result;

// Conditional Operator

    $ispassed = true;
    echo ($ispassed)? "Student get passed":"Student not passed";

    echo ($value1<=$value2)?"value 1 is greater than value2<br/>":"value 2 is greater than value1<br/>";

    echo $value1++."<br>";
    $value1 +=$value1;
    echo $value1."<br/>"; 

// Bitwise Operator

    echo ~5;
    echo "<br/>";
    echo 5&10;
    echo "<br/>";
    echo 5|10;
    echo "<br/>";

    
// Execution Operator

    echo `dir`;


// Error-control Operator

    @ $val = 1/1;
    // echo $val;
    echo "<br/>";
    // echo php_errormsg;


// Precedence Operator

    $res1 = true && false;
    $res2 = true and false;
    echo $res1;
    echo "<br/>";

    echo $res2;

    
?>