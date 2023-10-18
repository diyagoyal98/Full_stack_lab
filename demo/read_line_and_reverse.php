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
    $yourfile=fopen("rev.txt","w") or die ("unable to open");
    $content="";
    echo "the file contains:  </br>";
    while(!feof($myfile))
    {
        $ans="";
        $word="";
        $line=fgets($myfile);
        $n=strlen($line);
        echo "$line "."<br>";
        $i=0;
        while($i<$n)
        {
            if($line[$i] == " "|| $i==$n-1)
            {
                $word=$word.$line[$i];
                $trim=trim($word);
                $rev=strrev($trim);
                $ans=$ans.$rev." ";
                $word="";
                $i++;
                continue;
            }
            $word=$word.$line[$i];
            $i++;
        }
        $content=$content.$ans."\n";
    }
    fwrite($yourfile,$content);
    fclose($myfile);
    fclose($yourfile);
    echo"<br>hello done reverse";


    ?>
</body>
</html>