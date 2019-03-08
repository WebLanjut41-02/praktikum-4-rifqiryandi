<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/kurir/prosesinput" method="POST">
        ID KURIR    :<input type="text" name="idk" id=""><br>
        Nama KURIR  :<input type="text" name="nama" id=""><br>
        No hp KURIR :<input type="number" name="nohp" id=""><br>
        Email KURIR :<input type="email" name="email" id=""><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>