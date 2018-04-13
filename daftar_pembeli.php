<html>
    <?php 
include('php/koneksi.php');
    
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
                        <vid class="panel">
                            <table class="tabel" cellpadding="3px">               
                            <tr class="tr">
                                <th class="th">Nama Pembeli</th>
                                <th class="th">Alamat Pembeli</th>
                                <th class="th">Action</th>
                            </tr>
                                
                            <?php
                                session_start();
                                $nama_toko = $_SESSION['nama_toko'];
                                $query = mysql_query("SELECT DISTINCT id_pembeli FROM tbl_belanja WHERE (nama_toko='$nama_toko') ");
                               while($data = mysql_fetch_array($query)){ 
                                        $id_pembeli= $data['id_pembeli'];
                                $query2 = mysql_query("SELECT DISTINCT nama_pembeli,id_pembeli,alamat FROM tbl_belanja WHERE (id_pembeli='$id_pembeli')");
                                while($data2 = mysql_fetch_array($query2)){
                                        
                                ?>
                            <tr class="tr">
                                <td class="td"><p><?php echo $data2['nama_pembeli'];?></p></td>
                                <td class="td"><p><?php echo $data2['alamat'];?></p></td>
                                <form action="detail_pembeli.php" method="post">
                                <td class="td"><input type="text" name="id_pembeli2" value="<?php echo $data2['id_pembeli'];?>" hidden><input type="submit" value="Detail"/></a>&nbsp;</td>
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