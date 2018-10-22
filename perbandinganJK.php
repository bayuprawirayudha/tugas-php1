<?php 

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

$isian1 = $_POST['nama1'];
$isian2 = $_POST['nama2'];
$isian3 = $_POST['nama3'];
$isian4 = $_POST['nama4'];


if ($a == "Laki-Laki") {
	echo "<font color=blue>$isian1</font><br>";
}elseif ($a == "Perempuan") {
	echo "<font color=red>$isian1</font><br>";
}

if ($b == "Laki-Laki") {
	echo "<font color=blue>$isian2</font><br>";
}elseif ($b == "Perempuan") {
	echo "<font color=red>$isian2</font><br>";
}

if ($c == "Laki-Laki") {
	echo "<font color=blue>$isian3</font><br>";
}elseif ($c == "Perempuan") {
	echo "<font color=red>$isian3</font><br>";
}

if ($d == "Laki-Laki") {
	echo "<font color=blue>$isian4</font><br>";
}elseif ($d == "Perempuan") {
	echo "<font color=red>$isian4</font><br>";
}

 ?>