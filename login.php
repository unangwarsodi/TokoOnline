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
                            <li><a href="login.php" class="active"><span>LOGIN</span></a></li>
                            <li><a href="register.php"><span>REGISTER PEMBELI</span></a></li>
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
                        <form method="POST" action="php/login.php" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>Username</td> <td>:&nbsp&nbsp<input type="text" name="username"></input></td>
                                </tr>
                                <tr>
                                    <td>Password </td> <td>:&nbsp&nbsp<input type="password" name="password"></input></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></td> <td><input type="reset" name="simpan" value="Reset"></input></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>