<?php
session_start();
$polaczenie = new mysqli('localhost','root','','szyfrowanie');

$_SESSION['Mod'] = -1;

$polaczenie->close();
header("Location: index.php");
?>