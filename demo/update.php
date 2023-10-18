<?php include 'connecion.php';
$id= $_GET['id'];

$select="SELECT * from student where id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);


?>


<div>
    <form action="" method="POST">
        <input type="text" name="fistname" placeholder="firstname" value="<?php echo $row['firstname'] ?>">
        <br><br>

        <input type="text" name="lastname" placeholder="lastname" value="<?php echo $row['lastname'] ?>">
        <br><br>

        <input type="number" name="age" placeholder="age" value="<?php echo $row['age'] ?>">
        <br><br>

        <input type="submit" name="update_btn" value="Update Data">

        <button><a href="view.php">Back</a></button>
    </form> 
</div>



<?php
    if(isset($_POST['update_btn']))
    {
        $fname=$_POST['fistname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];

        $update="UPDATE student SET firstname='$fname',lastname='$lname',age='$age' WHERE Id='$id'";

        $data=mysqli_query($conn,$update);

        if($data)
        {
            echo "data update";
        }
        else
        {
            echo "please write again";
        }
    }
?>