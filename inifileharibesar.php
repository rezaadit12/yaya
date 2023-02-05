<?php
require 'fungsi.php';


$data = tampil("SELECT * FROM catatan ")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
       echo "<script>
             alert('Data Berhasil Diubah');
             document.location.href = 'inifileharibesar.php';
            </script>";
    }else{
        echo"data gagal diubah";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo Reza</title>
    <style>
        body{
            background-color: grey;
        }
    </style>
</head>
<body>
    <center>
        <br><br>
        <form action="" method="post">
            <label for="mc">Ubah Teks Sambutan</label><br>
            <textarea name="ketua" id="mc" cols="40" rows="100" ><?= $data["ketua"];?></textarea><br><br><br>

            <label for="kt">Ubah Teks MC</label><br>
            <textarea name="mc" id="kt" cols="40" rows="100"><?= $data["mc"];?></textarea><br><br>
            <button type="submit" name="submit">ubah</button>
        </form>
    </center>    
</body>
</html>