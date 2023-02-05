<?php
$conn = mysqli_connect("localhost", "root", "", "panitia");

function tampil($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $arrs =[];
    while($arr = mysqli_fetch_assoc($result)){
        $arrs[]=$arr;
    }
    return $arrs;
}


function ubah($ubah){
    global $conn;

    $ket =$_POST["ketua"];
    $mc = $_POST["mc"];
   

    $ubah = "UPDATE catatan SET
            ketua = '$ket',
            mc = '$mc'";

    mysqli_query($conn, $ubah);
    return mysqli_affected_rows($conn);
}
?>