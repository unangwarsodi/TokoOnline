    <?php 
include('php/koneksi.php');

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
                            <li> <a href = "edit_penjual.php?&id=<?php session_start(); echo $_SESSION['id_pembeli']; ?>"><span>Edit Profil</span></a></li>
                            <li><a href="php/logout.php"><span>LOGOUT</span></a></li>
                            <li><a href="tambah_barang.php"><span>Tambah Barang</span></a></li>
                            <li><a href="daftar_pembeli.php" class="active"><span>Daftar Pembeli</span></a></li>
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
                        <?php 
                             session_start();
                                $id_pembeli=$_POST['id_pembeli'];
                                $nama_toko=$_SESSION['nama_toko'];
                                $query = mysql_query("SELECT DISTINCT nama_pembeli, alamat FROM tbl_belanja WHERE (id_pembeli='$id_pembeli') AND (nama_toko='$nama_toko') ");
                                while ($data = mysql_fetch_array($query)){
                        ?>
                        <table cellpadding="5px">
                            <tr>
                                <td>Nama Pembeli</td><td>:&nbsp <?php echo $data['nama_pembeli']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Pembeli</td><td>:&nbsp <?php echo $data['alamat']; ?></td>
                         
                            <?php } ?>
                        </table><br/>
                        <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Nama</th>
                                <th class="th">Harga</th>
                                <th class="th">Jumlah</th>
                                <th class="th">Total Harga</th>
                            </tr>
                                
                            <?php
                                session_start();
                                $id_pembeli=$_POST['id_pembeli2'];
                                $nama_toko=$_SESSION['nama_toko'];
                                $query = mysql_query("SELECT * FROM tbl_belanja WHERE (id_pembeli='$id_pembeli') AND (nama_toko='$nama_toko') ");
                                while ($belanjaan = mysql_fetch_array($query)){
                                ?>
                            <tr class="tr">
                                <td class="td"><p><?php echo $belanjaan['nama'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['harga'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['jumlah'];?> &nbsp <?php echo $belanjaan['satuan'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['total_harga'];?></p></td>
                                <input type="text" value="<?php $belanja=$belanjaan['total_harga']; $total+=$belanja; echo number_format($total); ?>" name="seni" hidden>
                                </tr>
                                <?php } ?>
                        </table><br/><u>Total Belanjaan :&nbsp
                        <?php
                          $belanja=$belanjaan['seni']; 
                          $total+=$belanja;
                          echo number_format($total);
                          ?></u>
                         &nbsp <a href = "php/telah_dibayar.php?hal=delete&id=<?php echo $id_pembeli;?>"><button type="button" class="blue">Telah Dibayar</button></a>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>