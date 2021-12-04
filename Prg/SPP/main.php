<?php
include ('koneksi.php');
$page=isset($_GET['page']) ? $_GET['page'] : 'home';

if($page=='home') include "home.php";
if($page=='siswa') include "siswa.php";
if($page=='bendahara') include "bendahara.php";
if($page=='pembayaran') include "pembayaran.php";
if($page=='siswacari') include "siswacari.php";
if($page=='niscari') include "niscari.php";
?>