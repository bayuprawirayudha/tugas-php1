<?PHP
$var1=$_POST['bayu1'];
$varOf=$_POST['of'];
$var3=$_POST['bayu2'];

if($varOf=="+")
{
	$hasil= $var1+$var3;
	echo "$var1 + $var3=$hasil";
}else if ($varOf=="-"){
	$hasil=$var1-$var3;
	echo "$var1 - $var3=$hasil";
}else if ($varOf=="*"){
	$hasil=$var1*$var3;
	echo "$var1 * $var3=$hasil";
}else if ($varOf=="/"){
	$hasil=$var1/$var3;
	echo "$var1 / $var3=$hasil";
}else if ($varOf=="%"){
	$hasil=$var1%$var3;
	echo "$var1 % $var3=$hasil";
	
}
?>