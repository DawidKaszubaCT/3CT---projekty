<?php
session_start();
$polaczenie = new mysqli('localhost','root','','szyfrowanie');

if(isset($_POST['login']) && isset($_POST['password'])) {
            $postunioLogin = $_POST['login'];
            $postunioHaslo = $_POST['password'];

            $zapytanie = $polaczenie->query("SELECT login, haslo, rola FROM uzytkownik WHERE login = '$postunioLogin'");

            $_SESSION['Mod'] = 0;

            if($zapytanie->num_rows > 0) {
               list($login, $haslo, $rola) = $zapytanie->fetch_row();
               echo($postunioHaslo);

               if(password_verify($postunioHaslo, $haslo)) {
                $zalogowano = true;
                echo($zalogowano);
                $_SESSION['Mod'] = $rola;
               }
            }
            
           }

           $polaczenie->close();
header("Location: index.php");

?>