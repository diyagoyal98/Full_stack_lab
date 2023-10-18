<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $myfile=fopen("file1.txt",'r') or die("unable to open");
        $content1=fread($myfile,filesize("file1.txt"));
        fclose($myfile);

        $yourfile=fopen("file2.txt",'r') or die("unable to open");
        $content2=fread($yourfile,filesize("file2.txt"));
        fclose($yourfile);

        $myfile=fopen("file1.txt",'w') or die("unable to open");
        fwrite($myfile,$content2);
        fclose($myfile);

        $yourfile=fopen("file2.txt",'w') or die("unable to open");
        fwrite($yourfile,$content1);
        fclose($yourfile);

        echo "exchange complete";

    ?>
</body>
</html>