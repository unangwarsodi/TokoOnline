    <?php 
include('php/koneksi.php');
if (!isset($_SESSION)){
session_start();
$query = mysql_query("SELECT * FROM tbl_barang WHERE id='$_GET[id]'");
$data = mysql_fetch_array($query);
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
                            <li> <a href = "edit_penjual.php?&id=<?php session_start(); echo $_SESSION['id_pembeli']; ?>"><span>Edit Profil</span></a></li>
                            <li><a href="php/logout.php"><span>LOGOUT</span></a></li>
                            <li><a href="tambah_barang.php" class="active"><span>Tambah Barang</span></a></li>
                            <li><a href="daftar_pembeli.php"><span>Daftar Pembeli</span></a></li>
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
                        <form method="POST" action="php/tambah_barang.php" enctype="multipart/form-data">
                            <table>
                            <input type="text" name="id" value="<?php echo $data['id'];?>" hidden/>
                                <tr>
                                    <td>Nama</td> <td>:&nbsp&nbsp<input type="text" name="nama" value="<?php echo $data['nama'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Jenis</td> <td>:&nbsp&nbsp<select name="jenis"><option value="Sembako">Sembako</option> <option value="Makanan Berat">Makanan Berat</option> <option value="Minuman">Minuman</option> <option value="Makanan Ringan">Makanan Ringan</option></select></td>
                                </tr>
                                <tr>
                                    <td>Harga </td> <td>:&nbsp&nbsp<input type="text" name="harga" value="<?php echo $data['harga'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Foto </td> <td>:&nbsp&nbsp<input type="file" name="file" value="img/<?php echo $data['foto'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Jumlah </td> <td>:&nbsp&nbsp<input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Satuan </td> <td>:&nbsp&nbsp<input type="text" name="satuan" value="<?php echo $data['satuan'];?>"></input></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></input></td>
                                </tr>
                            </table>
                        </form>
                        <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Foto</th>
                                <th class="th">Nama</th>
                                <th class="th">Jenis</th>
                                <th class="th">Harga</th>
                                <th class="th">Jumlah</th>
                                <th class="th">Satuan</th>
                                <th class="th">Action</th>
                            </tr>
                                
                            <?php
                                session_start();
                                $nama_toko = $_SESSION['nama_toko'];
                                $query = mysql_query("SELECT * FROM tbl_barang WHERE (nama_toko='$nama_toko') ORDER by nama ASC");
                                while ($data = mysql_fetch_array($query)){
                                ?>
                            <tr class="tr">
                                <td class="td"><img src="file/<?php echo $data['foto'];?>" width="100px"></td>
                                <td class="td"><p><?php echo $data['nama'];?></p></td>
                                <td class="td"><p><?php echo $data['jenis'];?></p></td>
                                <td class="td"><p><?php echo $data['harga'];?></p></td>
                                <td class="td"><p><?php echo $data['jumlah'];?></p></td>
                                <td class="td"><p><?php echo $data['satuan'];?></p></td>
                                <td class="td"><a href = "tambah_barang.php?hal=edit&id=<?php echo $data['id'];?>"><button type="button" class="blue">Edit</button></a>&nbsp;
                                <a href = "php/delete.php?hal=delete&id=<?php echo $data['id'];?>"><button type="button" class="red">Delete</button></a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>