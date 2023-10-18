<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>html form</h1>
    <form method="POST" action="">
        <label>Enter your name:  </label>
        <input type="text" name="full">
        <br>
        <label>Enter your age:   </label>
        <input type="text" name="age">
        <br>
        <label>Enter your email:   </label>
        <input type="email" name="email">
        <br>
        <label>Select your sex: </label>
        Male<input type="radio" name="gen_m">
        Female<input type="radio" name="gen_f"><br>
        <label>Choose your languages:   </label>
        C++ <input type="checkbox" name="cpp">
        java <input type="checkbox" name="java">
        python <input type="checkbox" name="python">
        php <input type="checkbox" name="php">
        <br>
        <input type="FILE" name="my_file" size="30"> 
        <br>
        <input type="image" src="diya_linkdin.jpg" width="100">

        <button name="submit" >Save</button>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['full'];
        $ag=$_POST['age'];
        $em=$_POST['email'];
        $genm=$_POST['gen_m'];
        $genf=$_POST['gen_f'];
        $cpp=$_POST['cpp'];
        $ja=$_POST['java'];
        $py=$_POST['python'];
        $pp=$_POST['php'];
        $ibm=$_POST['ibm'];
        $inte=$_POST['intel'];

    ?>
    <tr>
        <th>NAME</th>
        <th>AGE</th>
        <th>EMAIL</th>
    </tr>
    <tr>
        <th><?php echo "$name"?>
        <br>
        <th><?php echo "$ag"?>
        <br>
        <th><?php echo "$em"?>
        <br>
        <th><?php if($genm=='on')
                  echo "male" ;
                  else
                  echo "female"; 
            ?></th>
        <br>
        <th><?php   if($cpp=="on")
                    echo "cpp  ";
                    if($ja=="on")
                    echo "java  ";
                    if($py=="on")
                    echo "python  ";
                    if($pp=="on")
                    echo "php  ";
        ?>
        </th>

        <th><?php   if($ibm=="on")
                    echo "ibm  ";
                    if($inte=="on")
                    echo "intel  ";
        ?>
        </th>
    </tr>
    <?php
    }

    ?>
</body>
</html>

