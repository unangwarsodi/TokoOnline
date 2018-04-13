    <?php 
include('php/koneksi.php');
if (!isset($_SESSION)){
}
?>
<html>
<body>
    <head>
        <title>Unang Warsodi</title>
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <table  cellpadding="1px" cellspacing="1px" align="center">
            <tr align="center" height="30px">
                <td colspan="2">
                    <div class="container">
                        <ul id="nav"> 
                            <img class="img" src="img/logo3.png" width="200">
                            <li> <a href = "edit_register.php?&id_pembeli=<?php session_start(); echo $_SESSION['id_pembeli']; ?>"><span>Edit Profil</span></a></li>
                            <li><a href="php/logout.php"><span>LOGOUT</span></a></li>
                            <li><a href="login.php"><span>LOGIN</span></a></li> 
                            <li><a href="daftar_belanjaan.php"><span>BELANJAAN</span></a></li>  
                            <li><a href="belanja.php" class="active"><span>BELANJA</span></a></li> 
                            <li><a href="index.php"><span>HOME</span></a></li>
                        </ul> 
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3"> <img src="img/slider.jpg" height="80px" width="1342px"> </td>
            </tr>
            <tr>
                <td> 
                            <?php
                                session_start();
                                $cek = $_POST['nama_toko'];
                                if($cek != NULL){
                                $_SESSION['nama_toko'] = $_POST['nama_toko'];
                                $nama_toko = $_SESSION['nama_toko'];
                                $query = mysql_query("SELECT * FROM tbl_barang WHERE (nama_toko='$nama_toko') ORDER by nama ASC");
                                }
                                else {
                                    
                                $nama_toko2 = $_SESSION['nama_toko'];
                                $query = mysql_query("SELECT * FROM tbl_barang WHERE (nama_toko='$nama_toko2') ORDER by nama ASC");
                                }
                                while ($belanjaan = mysql_fetch_array($query)){ 
                                    if($belanjaan['jumlah'] > 0){
                                ?>
                                    <div class="gallery">
                                        <a target="_blank" href="file/<?php echo $belanjaan['foto'];?>">
                                            <img src="file/<?php echo $belanjaan['foto'];?>" width="600" height="400">
                                        </a>
                                        <div class="desc">
                                            <h3><?php echo $belanjaan['nama'];?><br/>Rp.&nbsp<?php echo $belanjaan['harga'];?>&nbsp/&nbsp<?php echo $belanjaan['satuan'];?></h3>
                                            <a href = "detail.php?hal=edit&id=<?php echo $belanjaan['id'];?>"><button type="button" class="green">Beli</button></a>
                                        </div>
                                    </div>
                                <?php } } ?>
                </td>
            </tr>
        </table>
    </body>
</html>