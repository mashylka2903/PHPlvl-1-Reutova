<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="num1" placeholoder="First number">
    <input type="text" name="num2" placeholoder="Second number">
    <select name="operation">
    <option value="SUM">+</option>
    <option value="MIN">-</option>
    <option value="MULT">*</option>
    <option value="DIV">/</option>
    </select>
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

//var_dump($_POST);
if(isset($_POST['submit'])){
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $operation = $_POST['operation'];

    if(($num1!==null) && ($num2!==null)) {    

            switch($operation){
                case 'SUM' : $res = $num1 + $num2;
                break;
                case 'MIN' : $res = $num1 - $num2;
                break;
                case 'MULT' : $res = $num1 * $num2;
                break;
                case 'DIV' : 
                    if ($num2 == '0') { 
                        $error = 'Cant divide to 0';
                        
                    }
                    else {
                        $res = $num1 / $num2;
                        break;
                    }
            }        
    }
    else {
        $error = 'Field maybe empty';
    }
}

if(isset($error)) {
    echo $error;
}
else {
    echo $res;
}


?>

