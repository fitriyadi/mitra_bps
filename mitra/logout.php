<?php
session_start();
unset($_SESSION['mitra']);

echo "<script>window.location='../login.php';</script>";
?> 