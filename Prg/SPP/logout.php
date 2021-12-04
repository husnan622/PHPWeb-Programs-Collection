<?php
 session_start();
 session_destroy(); // menghapus semua session yang ada di server
 header('location:login.php');
 ?>

