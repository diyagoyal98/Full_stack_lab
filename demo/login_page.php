<?php  include "login_conn.php"; ?>

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
        <label>UserName: </label>
        <input type="text" name="username"></input>
        <br>
        <br>
        <label?>Password: </label>
        <input type="password" name="password"></input>
        <br><br>
        <input type="submit" name="submit" value="SUBMIT">
        <input type="button" name="clear" value="CLEAR">
    </form>


    <?php

    if(isset($_POST["submit"]))
    {
        
        $us=$_POST["username"];
        $pass=$_POST["password"];

        $q="select *from details where username='$us'and passw='$pass'";
        
        $d=mysqli_query($conn,$q);
        $count=mysqli_num_rows($d);

        if($count==1)
        {
            echo"login successfull";
            echo '<script type="text/Javascript">alert("successfull")</script>';
        }
        else
        {
            echo "not exists";
            echo '<script type="text/Javascript">alert("Not successful")</script>';
        }
    }

    ?>
</body>
</html>