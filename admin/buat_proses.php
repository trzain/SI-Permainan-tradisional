<?php ob_start();
include_once 'koneksi.php';
if($_POST){

    $judul = $_POST['judul'];
    $artikel = $_POST['artikel'];
    
    if($_POST){
        mysqli_query($connect, "INSERT INTO buat (judul, artikel) VALUES ('$judul', '$artikel') ");

    } else{
        mysqli_error('Tidak Dapat Tersambung Database');
        header('location: form_buat.php');
    }
    header('location: buat.php');
    exit;
}
;?>