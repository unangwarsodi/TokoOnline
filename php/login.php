<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login    = mysql_query("SELECT * FROM tbl_register WHERE username='$username' AND password='$password'");
$result   = mysql_num_rows($login);
if($result>0){
    $user = mysql_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    $_SESSION['id_pembeli'] = $user['id'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['alamat'] = $user['alamat'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['nama_toko'] = $user['nama_toko'];  
    $toko = $_SESSION['nama_toko'];
    if($toko != NULL){
        echo "<script>window.location='../tambah_barang.php';</script>";
    }   
    else {
    $_SESSION['username'] = $user['username'];
    $_SESSION['id_pembeli'] = $user['id'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['alamat'] = $user['alamat'];
    $_SESSION['username'] = $user['username'];
        echo "<script>window.location='../index.php';</script>";
    }
    
    
}else{
    header("location:../login.php");
}

?>
