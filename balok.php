<?php
if(isset($_GET["Hitung"])){
	$p=$_GET['p'];
	$l=$_GET['l'];
	$t=$_GET['t'];
	$volume=$p*$l*$t;
	$luas=2*(($p*$l)+($p*$t)+($l*$t));
	$hasil;
	if ($p <0||$l <0||$t <0){
		$hasil= "Input yang anda masukkan salah <br>";
	} 
	else {
		$hasil= "{$volume}<br>${luas}";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Balok</title>
	<style>
		body{
			background-image: url(bangunruang.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
		}
	</style>
</head>
<body>
	<div align="center">
	<form action="" method="GET" >
	<h1>Menghitung Volume dan Luas Balok</h1><br>
	<p>Masukkan Panjang</p>
	<input type="number" name="p">
	<p>Masukkan Lebar</p>
	<input type="number" name="l">
	<p>Masukkan Tinggi</p>
	<input type="number" name="t"><br>
	<input type="submit" name="Hitung">
	<br>
	<br>
	<h1 align="center">
		<?php 
			if (isset($_GET["Hitung"])) {
				echo $hasil;
			}
		?>
	</h1>
</form>
</div>
</body>
</html>