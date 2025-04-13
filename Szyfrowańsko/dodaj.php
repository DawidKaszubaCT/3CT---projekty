<?php
session_start();
$polaczenie = new mysqli('localhost','root','','szyfrowanie');

if( isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['log']) && isset($_POST['pass'])) {
    $postunioImie = $_POST['name'];
    $postunioNazwisko = $_POST['lastName'];
    $postunioLog = $_POST['log'];
    $postunioHaslo = $_POST['pass'];

    $hashedHaslo = password_hash($postunioHaslo, PASSWORD_DEFAULT);

    $polaczenie->query("INSERT INTO uzytkownik(imie, nazwisko, login, haslo, rola) VALUES('$postunioImie', '$postunioNazwisko', '$postunioLog', '$hashedHaslo', 0)");

}

$polaczenie->close();
header("Location: index.php");

?>