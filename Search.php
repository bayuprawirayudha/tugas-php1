<?php
$isian = $_POST['kata'];
$kata = "Indonesia merupakan negara beribu kepulauan dari sabang sampai merauke. Indonesia akan banyak potensi alam yang sangat berlimpah dan nan indah.";
$karakter = strlen($isian);
$urutan = strpos($kata, $isian);
$cari=explode(" ", $isian);
$cek = count($cari);
?>
<html>
<head>
	<title>PHP!</title>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<p>
	<?php for ($i=0; $i<$cek; $i++) {
	if ($isian == $cari[$i])
	{
		echo "<font color=green> $cari[$i]</font> ";
	}
	else{
		echo "$cari[$i]";
	}
}
?>
</p>
<table border="1" width="20%">
	<tr>
			<th colspan="2"><h1>Cari Kata!</h1></th>
	</tr>
	<tr>
		<td>Kata :</td>
		<td><?= "$isian"; ?></td>
	</tr>
	<tr>
		<td>Jumlah Karakter :</td>
		<td><?= "$karakter"; ?></td>
	</tr>
	<tr>
		<td>Urutan :</td>
	<td><?= "ke-$urutan";?></td>
	</tr>
</table>
</center>
</body>
</html>
