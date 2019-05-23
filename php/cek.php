<?php 
$nama = $_POST['nama'];
$nim  = $_POST['nim'];
$nim_angka = "^[0-9]$";
$nim_karakter = "^{1,10}$";

if(empty($nama) && empty($nim)){
	header("location:index.php?nama_nim=kosong");
}
else if(empty($nama)){
	header("location:index.php?nama=kosong");
}
else if(empty($nim)){
	header("location:index.php?nim=kosong");
}
//else if( $nim != $nim_karakter && $nim != $nim_angka){
	else if(!preg_match("/^[0-9]{10}$/",$nim)){
	header("location:index.php?nim_angka=salah");
}
else{
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<h1 align='center'>Nama Anda : ". $nama ."</h1>";
	echo "<h1 align='center'>Nim Anda  : ". $nim ."</h1>";
}
?>