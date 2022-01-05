<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height:600px;
            display: flex;
            align-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
    <?php
        $EmpName = "Prasanth";
        $EmpId = 101;
        $Married = "0";
        $Empemail = "prasajkhfjhdsf@gmail.com";
        $Lastsalary = 10000.1;
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Married</th>
            <th>EmailId</th>
            <th>LastSalary</th>
        </tr>
        <tr>
            <td><?=$EmpName?></td>
            <td><?=$EmpId?></td>
            <td><?=($Married)?"Yes":"No"?></td>
            <td><?=$Empemail?></td>
            <td><?=$Lastsalary?></td>
        </tr>
    </table>
</body>
</html>