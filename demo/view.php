<?php include 'connecion.php'; ?>

<a href="index.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0px"> 
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>
<?php

    $querry="SELECT * from student";
    $data=mysqli_query($conn,$querry);
    $result=mysqli_num_rows($data);
    if($result)
    {
        #echo "display";

        while($row=mysqli_fetch_array($data))
        {
            ?>
            <tr>
               <td><?php echo $row['firstname']; ?></td>

               <td><?php echo $row['lastname']; ?></td>

               <td><?php echo $row['age']; ?></td>

               <td><a href="update.php?id=<?php echo $row['Id']; ?>">Edit</a></td>

               
            </tr>

            <?php
        }
    }
    else
    {
        echo "no data found";
    }
?>
</table>