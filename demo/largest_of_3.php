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
        First Number:  
        <input type="number" name="num1">
        <br>
        Second Number:  
        <input type="number" name="num2">
        <br>
        Third Number:  
        <input type="number" name="num3">
        <br>
        <input type="submit" name="submit" value="submit ?">
    </form>


    <?php
    
    if(isset($_POST['submit']))
    {
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $n3=$_POST['num3'];

        if($n1>$n2 && $n1>$n3)
        {
            echo "n1 is the largest";
        }
        else if($n2>$n1 && $n2>$n3)
        {
            echo "n2 is the largest";
        }
        else
        echo "n3 is the largest";
    }


    ?>
</body>
</html>