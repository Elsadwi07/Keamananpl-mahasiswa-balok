<!DOCTYPE html>
<html>
<head>
	<title>Nilai Akhir Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	$nama = $_POST['Nama'];
	$nim = $_POST['NIM'];
	$partisipasi = $_POST['Partisipasi'];
	$tugas = $_POST['Tugas'];
	$uts = $_POST['UTS'];
	$uas = $_POST['UAS'];
	
	$hasil;
	if ($partisipasi <0||$tugas <0||$uts <0||$uas <0) {
		$nilai_akhir= "Data Error <br>";
	} 
	else {
		$nilai_akhir= strval($nilai);
	}
	//menghitung nilai dari index
	$nilai_partisipasi = $partisipasi * 0.2;
	$nilai_tugas = $tugas * 0.3;
	$nilai_uts = $uts * 0.2;
	$nilai_uas = $uas * 0.3;
	
	//jumlahkan semua nilai untuk mendapatkan nilai akhir
	$nilai_akhir = $nilai_partisipasi + $nilai_tugas + $nilai_uts + $nilai_uas;
	
	//menghitung grade berdasarkan nilai
	if ($nilai_akhir >= 80) 
	{
		$grade = "A";	
	}
		elseif ($nilai_akhir >= 70) 
		{
			$grade = "B";
		}
		elseif ($nilai_akhir >= 50) 
		{
			$grade = "C";
		}
		elseif ($nilai_akhir >= 40) 
		{
			$grade = "D";
		}
		else 
		{
			$grade = "E";
		}

?>
<center>
		<h1>NILAI MAHASISWA UNESA</h1>
		<table border="0" width="350">
			<tr>
				<td>Nama Mahasiswa</td>
				<td><b><?php echo "$nama";?></b></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><b><?php echo "$nim";?></b></td>
			</tr>
			<tr>
				<td>Nilai Partisipasi</td>
				<td><b><?php echo "$partisipasi";?></b></td>
			</tr>
			<tr>
				<td>Nilai Tugas</td>
				<td><b><?php echo "$tugas";?></b></td>
			</tr>
			<tr>
				<td>Nilai UTS</td>
				<td><b><?php echo "$uts";?></b></td>
			</tr>
			<tr>
				<td>Nilai UAS</td>
				<td><b><?php echo "$uas";?></b></td>
			</tr>
			<tr>
				<td>Nilai Akhir</td>
				<td><b><?php echo "$nilai_akhir";?></b></td>
			</tr>
			<tr>
				<td>Grade</td>
				<td><b><?php echo "$grade";?></b></td>
			</tr>
		</table>
	</center>
	<?php
		if(isset($_GET["Hitung"])){
		echo $nilai_akhir;
		}
		?>
</body>
</html>