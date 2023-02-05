<?php
require 'fungsi.php';

$data = tampil("SELECT * FROM catatan");

if(isset($_POST["submit"])){
    header("Location: opsitwo.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stye2.css">
    <title>mc</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="btn">
            <center><h1>Teks MC</center><br><br><hr>
                <div class="hallo">
                <?php foreach($data as $dt):?>
                    <p>
                        <center> <textarea name="" id="mc" cols="40" rows="100" ><?= $dt["mc"];?></textarea><br><br></center><br> 
                    </p>
                <?php endforeach; ?>
                     <center>
                        <form action="" method="post">
                        <button type="submit" name="submit">Muat Ulang</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>