    <?php 
include('php/koneksi.php');
if (!isset($_SESSION)){
session_start();
}
$query = mysql_query("SELECT * FROM tbl_barang WHERE id='$_GET[id]'");
$data = mysql_fetch_array($query);
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
                            <li><a href="php/logout.php"><span>LOGOUT</span></a></li>
                            <li> <a href = "register.php?&id_pembeli=<?php session_start(); echo $_SESSION['id_pembeli']; ?>"><span>Edit Profil</span></a></li>
                            <li><a href="login.php"><span>LOGIN</span></a></li> 
                            <li><a href="daftar_belanjaan.php"><span>BELANJAAN</span></a></li>  
                            <li><a href="belanja.php"><span>BELANJA</span></a></li> 
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
                    <div id="konten">
                        <form method="POST" action="php/beli.php" enctype="multipart/form-data">
                        <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Nama</th>
                                <th class="th">Harga</th>
                                <th class="th">Jumlah</th>
                                <th class="th">Total Harga</th>
                            </tr>
                                
                            <?php
                                session_start();
                                $ID = $_SESSION['id_pembeli'];
                                $query = mysql_query("SELECT * FROM tbl_belanja WHERE id_pembeli='$ID'");
                                
                                while ($belanjaan = mysql_fetch_array($query)){
                                    
                                ?>
                            <tr class="tr">
                                <td class="td"><p><?php echo $belanjaan['nama'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['harga'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['jumlah'];?> &nbsp <?php echo $belanjaan['satuan'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['total_harga'];?></p></td>
                                <td class="td"><input type="text" value="<?php $belanja=$belanjaan['total_harga']; $total+=$belanja; echo ($total); ?>" name="seni" hidden></td>
                            </tr>
                            <?php } ?>
                        </table><br/><u>Total Belanjaan :&nbsp
                        <?php
                          $belanja=$belanjaan['seni']; 
                          $total+=$belanja;
                          echo number_format($total);
                          ?></u><br/><br/>
                        <br/><br/>
                        <input type="text" name="nama_pembeli" value="<?php session_start(); echo $_SESSION['nama']; ?>" hidden>
                        <input type="text" name="alamat" value="<?php session_start(); echo $_SESSION['alamat']; ?>" hidden>
                        <input type="text" name="nama_toko" value="<?php session_start(); echo $_SESSION['nama_toko']; ?>" hidden>
                        <input type="text" name="id_pembeli" value="<?php session_start(); echo $_SESSION['id_pembeli']; ?>" hidden>
                        <input type="text" name="id_barang" value="<?php echo $data['id'];?>" hidden>
                            <table>
                                <tr>
                                    <td rowspan="5"><img src="file/<?php echo $data['foto'];?>" width="400px"></td> 
                                    <td><center><h3><input type="text" name="nama" value="<?php echo $data['nama'];?>" hidden><?php echo $data['nama'];?></h3></center></td>
                                </tr>
                                <tr>
                                    <td>Jenis &nbsp :&nbsp <?php echo $data['jenis'];?></td>
                                </tr>
                                <tr>
                                    <td>Harga &nbsp :&nbsp <input type="text" name="harga" value="<?php echo $data['harga'];?>" hidden><input type="text" name="satuan" value="<?php echo $data['satuan'];?>" hidden> <?php echo $data['harga'];?> &nbsp / &nbsp <?php echo $data['satuan'];?></td>
                                </tr>
                                <tr>
                                    <td><a href = "daftar_belanjaan.php"><input type="submit" name="simpan" value="Beli"></a></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>