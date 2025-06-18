<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>

    <?php 
    //variabelen voor databaseverbinding
        $servername = "mysql";
    $username = "root";
    $password = "password";

    //verbinding met database
     $conn = new mysqli($servername, $username, $password, "zingusDB");
        if ($conn->connect_error) {
  die(" Connection failed: " . $conn->connect_error);}
    
    ?>
<h1 class="titletext">  
  <span style="--i:1">s</span>
  <span style="--i:2">i</span>
  <span style="--i:3">g</span>
  <span style="--i:4">n</span>
  <span style="--i:5"> </span>
  <span style="--i:6">i</span>
  <span style="--i:7">n</span>
  <span style="--i:8">:</span>
<span style="--i:9">\</span>
<span style="--i:10">\</span>
<span style="--i:11">\</span>
<span style="--i:12">\</span>
<span style="--i:13">\</span>
<span style="--i:14">\</span>
<span style="--i:15">\</span>
<span style="--i:16">\</span>
<span style="--i:17">\</span>
<span style="--i:18">\</span>
<span style="--i:19">\</span>
<span style="--i:20">\</span>
<span style="--i:21">\</span>
<span style="--i:22">\</span>
<span style="--i:23">\</span>
<span style="--i:24">\</span>
<span style="--i:25">\</span>
<span style="--i:26">\</span>
<span style="--i:27">\</span>
<span style="--i:28">\</span>
<span style="--i:30">\</span>
<span style="--i:31">\</span>
<span style="--i:32">\</span></h1>
<div class="textbrick">
<form action="aftersignup.php" method="post">
Name: <input type="text" name="name" minlength="3" maxlength="15"><br>
Password: <input type="password" name="password" minlength="5" maxlength="15"><br>
<input id="verzenden" type="submit" value="submit">

<a id="entrybutton" href="login.php" class="button">log in</a>
        </div>
</body>
</html>