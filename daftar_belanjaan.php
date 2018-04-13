    <?php 
include('php/koneksi.php');
if (!isset($_SESSION)){
session_start();
$query = mysql_query("SELECT * FROM tbl_belanja WHERE id='$_GET[id]'");
$belanjaan = mysql_fetch_array($query);
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
                            <li><a href="daftar_belanjaan.php" class="active"><span>BELANJAAN</span></a></li>  
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
                            <table>
                            <input type="text" name="nama_pembeli" value="<?php session_start(); echo $_SESSION['nama']; ?>" hidden>
                            <input type="text" name="alamat" value="<?php session_start(); echo $_SESSION['alamat']; ?>" hidden>
                            <input type="text" name="nama_toko" value="<?php session_start(); echo $_SESSION['nama_toko']; ?>" hidden>
                            <input type="text" name="id_pembeli" value="<?php session_start(); echo $_SESSION['id_pembeli']; ?>" hidden>
                            <input type="text" name="id" value="<?php echo $belanjaan['id'];?>" hidden/>
                            <input type="text" name="id_barang" value="<?php echo $belanjaan['id_barang'];?>" hidden/>
                            <input type="text" name="jumlah_semula" value="<?php echo $belanjaan['jumlah'];?>" hidden/>
                                <tr>
                                    <td>Nama</td> <td>:&nbsp&nbsp<input type="text" name="nama" value="<?php echo $belanjaan['nama'];?>" readonly></input></td>
                                </tr>
                                <tr>
                                    <td>Jumlah </td> <td>:&nbsp&nbsp<input type="text" name="jumlah" value="<?php echo $belanjaan['jumlah'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Harga </td> <td>:&nbsp&nbsp<input type="text" name="harga" value="<?php echo $belanjaan['harga'];?>" readonly></input></td>
                                </tr>
                                <tr>
                                   <td>&nbsp&nbsp<input type="text" name="satuan" value="<?php echo $belanjaan['satuan'];?>"hidden></input></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></td>
                                </tr>
                            </table>
                        </form>
                        <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Nama</th>
                                <th class="th">Harga</th>
                                <th class="th">Jumlah</th>
                                <th class="th">Total Harga</th>
                                <th class="th">Action</th>
                            </tr>
                                
                            <?php
                                session_start();
                                $total_harga=$_POST['total_harga'];
                                $ID = $_SESSION['id_pembeli'];
                                $query = mysql_query("SELECT * FROM tbl_belanja WHERE (id_pembeli='$ID') ");
                                while ($belanjaan = mysql_fetch_array($query)){
                                ?>
                            <tr class="tr">
                                <td class="td"><p><?php echo $belanjaan['nama'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['harga'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['jumlah'];?> &nbsp <?php echo $belanjaan['satuan'];?></p></td>
                                <td class="td"><p><?php echo $belanjaan['total_harga'];?></p></td>
                                <td class="td"> 
                                <input type="text" value="<?php $belanja=$belanjaan['total_harga']; $total+=$belanja; echo number_format($total); ?>" name="seni" hidden>
                                <a href = "daftar_belanjaan.php?hal=edit&id=<?php echo $belanjaan['id'];?>"><button type="button" class="blue" id="inline">Edit</button></a>&nbsp;
                                    <a href ="php/batal.php?nama=<?php echo $belanjaan['nama'];?>&nama_toko=<?php echo $belanjaan['nama_toko'];?>&id=<?php echo $belanjaan['id'];?>&jumlah=<?php echo $belanjaan['jumlah'];?>"><button type="submit" class="green">Batal</button></a>
                                <a href = "php/delete_belanjaan.php?hal=delete&id=<?php echo $belanjaan['id'];?>"><button type="button" class="red">Delete</button></a></td>
                            </tr>
                            <?php } ?>
                        </table><br/><u>Total Belanjaan :&nbsp
                        <?php
                          $belanja=$belanjaan['seni']; 
                          $total+=$belanja;
                          echo number_format($total);
                          ?>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>