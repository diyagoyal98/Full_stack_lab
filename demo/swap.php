<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Enter number1:
    <input type="number" name="num1">
    <br>
    Enter number2:
    <input type="number" name="num2">
    <br>

    <input type="submit" name="submit">

</form>
    <?php

    if(isset($_POST['submit']))
    {
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $n3=$n1;
        $n1=$n2;
        $n2=$n3;
        
        echo "how numbers are ";
        echo "number 1 is $n1";
        echo " number 2 is $n2";

    }

    ?>
</body>
</html>