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
                            <li><a href="register.php"><span>REGISTER PEMBELI</span></a></li>
                            <li><a href="register_penjual.php" class="active"><span>REGISTER PENJUAL</span></a></li>
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
                        <form method="POST" action="php/register_penjual.php">
                            <table>
                                <tr>
                                    <td>Nama Lengkap </td> <td>:&nbsp&nbsp<input type="text" name="nama"></input></td>
                                </tr>
                                <tr>
                                    <td>TTL </td> <td>:&nbsp&nbsp<input type="text" name="ttl"></input></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin </td> <td>:&nbsp&nbsp<select name="jenis_kelamin"><option value="Laki-laki">Laki-laki</option> <option value="Perempuan">Perempuan</option></select></td>
                                </tr>
                                <tr>
                                    <td>Alamat </td> <td>:&nbsp&nbsp<input type="text" name="alamat"></input></td>
                                </tr>
                                <tr>
                                    <td>Email </td> <td>:&nbsp&nbsp<input type="text" name="email"></input></td>
                                </tr>
                                <tr>
                                    <td>Username </td> <td>:&nbsp&nbsp<input type="text" name="username"></input></td>
                                </tr>
                                <tr>
                                    <td>Password </td> <td>:&nbsp&nbsp<input type="password" name="password"></input></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password </td> <td>:&nbsp&nbsp<input type="password" name="confirm"></input></td>
                                </tr>
                                <tr>
                                    <td>Nama Toko </td> <td>:&nbsp&nbsp<input type="text" name="nama_toko"></input></td>
                                </tr>
                                <tr>
                                    <td>Kota Toko </td> <td>:&nbsp&nbsp<input type="text" name="kota"></input></td>
                                </tr>
                                <tr>
                                    <td>Daerah Toko </td> <td>:&nbsp&nbsp<input type="text" name="daerah"></input></td>
                                </tr>
                                <tr>
                                    <td>Alamat Toko </td> <td>:&nbsp&nbsp<input type="text" name="alamat_toko"></input></td>
                                </tr>
                                <tr>
                                    <td></td> <td><input type="submit" name="simpan" value="Simpan"></input></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>