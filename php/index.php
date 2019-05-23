<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<h1 align="center">Membuat Form Validasi Dengan PHP</h1>

	<hr width="50%" size="6px" style="background-color: blue;">
 	<br>
 	<br><center>
	<?php 

	if(isset($_GET['nama_nim'])){
		if($_GET['nama_nim'] == "kosong"){
			echo "<h4 style='color:red'>Nama dan Nim Belum Di Masukkan !</h4>";
		}
	}

	else if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}

	else if(isset($_GET['nim'])){
		if($_GET['nim'] == "kosong"){
			echo "<h4 style='color:red'>Nim Belum Di Masukkan !</h4>";
		}
	}

	else if(isset($_GET['nim_angka'])){
		if($_GET['nim_angka'] == "salah"){
			echo "<h4 style='color:red'>Nim Harus Berupa Angka 10 karakter !</h4>";
		}
	}


	?>
	</center>
	<h3 align="center">Masukkan Nama dan Nim Anda</h4>
	<form action="cek.php" method="post">
		<table align="center">
			<tr>
				<td><b>Nama :</b><br>
				<input type="text" name="nama" style="border-radius: 5px; border-color: grey; "></td>
			</tr>
			<tr>
				<td><b>Nim  :</b>
				<br><input type="text" name="nim"  style=" border-radius: 5px; border-color: grey;"></td><br>
			</tr>					
			<td align="center" ><input type="submit" value="LOGIN" style="border-radius: 30px; border: 1; color: blue;"></td>	
		</table>
		<br>
		<br>
		<br>
		<hr width="30%" size="5px" style="background-color: blue;">
	</form>
</body>
</html>