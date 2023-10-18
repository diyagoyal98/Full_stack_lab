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
        Enter the customer number : 
        <input type="text">
        <br>
        Enter the customer name :
        <input type="text">
        <br>
        Enter the previous reading : 
        <input type="number" name="prev">
        <br>
        Enter the present reading :
        <input type="number" name="curr"> 
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $total_red=$_POST['curr']-$_POST['prev'];

        $cost=1;

        if($total_red<100)
        {
            $cost=$total_red*100;
        }
        else if($total_red>=100 && $total_red<200)
        {
            $cost=$total_red*4;
        }
        else if($total_red>=200 && $total_red<300)
        {
            $cost=$total_red*5;
        }
        else
        $cost=$total_red*6;

        echo "amount is : $cost";
    }
    

    ?>
</body>
</html>