<html>
    <?php 
include('php/koneksi.php');

session_start();
     unset($_SESSION['nama_toko']);
      

?>
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
                            <li><a href="belanja.php"><span>BELANJA</span></a></li> 
                            <li><a href="index.php" class="active"><span>HOME</span></a></li> 
                            
                        </ul> 
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3"> <img src="img/slider.jpg" height="80px" width="1342px"> </td>
            </tr>
            <tr>
                <td> 
                    <div id="konten">
                        <vid class="panel">
                            <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Nama Toko</th>
                                <th class="th">Alamat Toko</th>
                                <th class="th">Action</th>
                            </tr>
                                
                            <?php
                                $query = mysql_query("SELECT * FROM tbl_register ");
                                while ($data = mysql_fetch_array($query)){
                                    $toko = $data['nama_toko'];
                                    
                                    
                                    if($toko != NULL) {
                                $nama = mysql_query("SELECT * FROM tbl_register WHERE (nama_toko='$toko') ORDER by nama ASC");
                                $toko = mysql_fetch_array($nama);
                                ?>
                            <tr class="tr">
                                <td class="td"><p><?php echo $data['nama_toko'];?></p></td>
                                <td class="td"><p><?php echo $data['alamat_toko'];?></p></td>
                                <form action="belanja.php" method="post">
                                <td class="td"><input type="hidden" name="nama_toko" value="<?php echo $data['nama_toko'];?>"><a href = "belanja.php"<?php ?>><input type="submit" value="Belanja"/></a>&nbsp;</td>
                                </form>
                            </tr>
                                <?php } }?>
                        </table>
                        </vid>
                     </div>
                </td>
            </tr>
        </table>
    </body>
</html>