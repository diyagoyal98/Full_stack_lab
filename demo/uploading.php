<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>file uploading</h1>
    <form action="fileupload" method="POST" enctype='multipart/form-data'>
        <input type="file" name="my_file">
        <input type="submit" name="upload" value="send">
    </form>

</body>
</html>