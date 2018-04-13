<?php
    include 'php/koneksi.php';
    $query = mysql_query("SELECT * FROM tbl_register WHERE id='$_GET[id_pembeli]'");
    $data = mysql_fetch_array($query);
?>
<html>
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
                            <li><a href="tambah_barang.php"><span>LOGIN</span></a></li>
                            <li><a href="register.php" class="active"><span>REGISTER PEMBELI</span></a></li>
                            <li><a href="register_penjual.php"><span>REGISTER PENJUAL</span></a></li>
                            <li><a href="index.php" ><span>HOME</span></a></li>
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
                        <form method="POST" action="php/register.php">
                            <input type="text" name="id_pembeli" value="<?php echo $data[id]; ?>" hidden>
                            <table>
                                <tr>
                                    <td>Nama Lengkap </td> <td>:&nbsp&nbsp<input type="text" name="nama" value="<?php echo $data[nama]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>TTL </td> <td>:&nbsp&nbsp<input type="text" name="ttl" value="<?php echo $data[ttl]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin </td> 
                                    <td>:&nbsp&nbsp
                                        <select name="jenis_kelamin">
                                            <?php
                                                if($data['jk'] == "Perempuan"){
                                                    echo "<option value='Perempuan'>Perempuan</option> <option value='Laki-laki'>Laki-laki</option>";
                                                }
                                                else {
                                                    echo "<option value='Laki-laki'>Laki-laki</option> <option value='Perempuan'>Perempuan</option>";
                                                }
                                             ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat </td> <td>:&nbsp&nbsp<input type="text" name="alamat" value="<?php echo $data[alamat]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Email </td> <td>:&nbsp&nbsp<input type="text" name="email" value="<?php echo $data[email]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Username </td> <td>:&nbsp&nbsp<input type="text" name="username" value="<?php echo $data[username]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Password </td> <td>:&nbsp&nbsp<input type="password" name="password" value="<?php echo $data[password]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password </td> <td>:&nbsp&nbsp<input type="password" name="confirm" value="<?php echo $data[password]; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td> <td><input type="submit" name="simpan" value="Simpan"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>