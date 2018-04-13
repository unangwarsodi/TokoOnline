		<?php 
		include 'koneksi.php';		
							
			
			$Nama = $_POST['nama'];
			$TTL = $_POST['ttl'];
			$Jenis_kelamin = $_POST['jenis_kelamin'];
			$Alamat = $_POST['alamat'];
			$Email = $_POST['email'];
			$Username = $_POST['username'];
			$Password = $_POST['password'];
			$Confirm = $_POST['confirm'];
			$Nama_Toko = $_POST['nama_toko'];
			$Kota = $_POST['kota'];
			$Daerah = $_POST['daerah'];
			$Alamat_Toko = $_POST['alamat_toko'];
			$Foto = $_POST['file'];
			$id = $_POST['id_pembeli'];
			$search = mysql_query("SELECT * FROM tbl_register WHERE id='$id'");
			$result = mysql_num_rows($search);

			if($result > 0) {
				$query = mysql_query("UPDATE tbl_register SET nama='$Nama', ttl='$TTL', jk='$Jenis_kelamin', alamat='$Alamat', email='$Email', username='$Username', password='$Password' WHERE id='$id'");
				if($query){
					echo "<script>alert('Anda Telah Berhasil Mengedit Profil Anda');</script>";
					echo "<script>window.location='../index.php';</script>";
				}
				else {
							"<script>alert('Edit Profil Gagal');</script>";
						}
			}

			else {

				if($Password == $Confirm){
					if($Nama &&  $TTL && $Jenis_kelamin && $Alamat && $Email && $Username && $Password !=NULL ){
						$query = mysql_query("INSERT INTO tbl_register VALUES(NULL, '$Nama', '$TTL', '$Jenis_kelamin', '$Alamat', '$Email', '$Username', '$Password', '$Nama_Toko', '$Kota', '$Daerah', '$Alamat_Toko')");
						if($query){
									echo "<script>alert('Anda Telah Berhasil Register Sebagai Pembeli');</script>";
										echo "<script>window.location='../login.php';</script>";
						}
						else {
							echo "<script>alert(Register Gagal');</script>";
						}
					}				
					else {
							echo "<script>alert('Anda Gagal Melakukan Register, Silahkan Isi Dengan Lengkap Data Anda');</script>";
							echo "<script>window.location='../register.php';</script>";
					}
				
				}
				else echo "<script>alert('Password dan Confirm  Password tidak cocok');</script>";
			}
		
		?>
 