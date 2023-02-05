<?php
if(isset($_POST["submit"])){
    if($_POST["nama"] == "Reza" && $_POST["pass"] == "haribesar"){
        header("Location: inifileharibesar.php");
    }else{
        echo"data tidak tersedia";
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="des.css">
    <title>Document</title>
</head>
<body>
    <center>
    <br><br><br>
    <h2>HALAMAN ADMIN</h2>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="username"><br><br>
        <input type="password" name="pass" placeholder="password" ><br><br>
        <button type="submit" name="submit" >login</button>
    </form>
    </center>
</body>
</html>