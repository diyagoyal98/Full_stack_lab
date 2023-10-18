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

    Enter the number:
    <input type="number" name="num1">
    <br>
    <input type="submit" name="submit">
    </form>
    <?php

    if(isset($_POST['submit']))
    {
        $n1=$_POST['num1'];
        if($n1%2==0)
        {
            echo "number is even";
        }
        else
        echo "number is odd";
    }

    ?>
</body>
</html>