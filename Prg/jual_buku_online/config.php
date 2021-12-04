<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "jual_buku_online";
mysql_connect("$host", "root", "") or die("cannot connect" . mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
?>