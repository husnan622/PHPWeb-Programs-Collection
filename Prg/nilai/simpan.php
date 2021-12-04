<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
</head>
<body>
<?php
$nim=$_POST['nim'];
$nm=$_POST['nm'];
$mk=$_POST['mk'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

$nr=($n1+$n2+$n3)/3;
if ($nr>59)
{ $ket="LULUS";}
else
{$ket="TIDAK LULUS";}

include "koneksi.php";
mysql_query("INSERT into mhs values('$nim','$nm','$mk','$n1','$n2','$n3','$nr','$ket')");
?>
<meta http-equiv=refresh content=0;url="index.php">
</body>
</html>
