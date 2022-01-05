<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Day-1 PHP.php" method="post">
        <label>UserName : <input type="text" name="username"/>
        <label>Password : <input type="password" name="password"/>
        <br/>
        <button type="submit">Submit</button>
        <br/>
        <br/>

    </form>

    <?php
        error_reporting(0);
        // $fan = "Hello";
        // function func(){
        //     global $fan;
        //     $value = "Prasanth !";
        //     echo "Welcome $fan <br/><br/>";
        // }
        // func();



        // function pr($uname,$pass){
        //     if($uname=="username" && $pass == "Password")
        //         echo "Welcome '$uname' your password is '$pass'<br/>";
        //     else
        //         echo "wrong crediential<br/>";    
        // }


        if(isset($_POST["username"])){
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            // pr($uname,$pass);
            echo "Username : $uname<br/>";
            echo "Password : $pass<br/>";

        }
        else{
            $uname = null;
            echo "No username supplies<br/>";
        }

        echo $_POST["username"]+"<br/>";
        echo $_POST["password"];



        // $arr = array("1 => Dhanush","2 => Daniel","3 => Prasanth","4 => Santhosh");
        // foreach($arr as $key => $val){
        //     echo "Your name is $val at $key <br/>";
        // }

    ?>

    
</body>
</html>