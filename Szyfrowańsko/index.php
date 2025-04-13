<?php 
  session_start();
  $polaczenie = new mysqli('localhost','root','','szyfrowanie');
  $sprawdzanko = $polaczenie->query("SELECT * FROM uzytkownik");
  if($sprawdzanko->num_rows <= 0)
  {
    $haslo = password_hash('BombardiroJS', PASSWORD_DEFAULT);
    $polaczenie->query("INSERT INTO uzytkownik(imie, nazwisko, login, haslo, rola) VALUES ('Arkadiusz', 'Waliczek', 'Arunia', '$haslo', 1)");
  }
  $zalogowano = false;

$zapytanicho = $polaczenie->query("SELECT opis, foto FROM info");

$row = $zapytanicho->fetch_row();

list($opis, $foto) = $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="applyContentChange(1)">
    <header>
        <h2>Banerunio</h2>
        <?php if($_SESSION['Mod'] == 1): ?> <h1>Admin</h1> <?php endif;?>
        <?php if($_SESSION['Mod'] == 1 || $_SESSION["Mod"] == 0): ?> <form action="wyloguj.php" method="post"><input type="submit" value="Wyloguj się"></form> <?php endif; ?>
    </header>
    <main>
    <aside>
        <ul>
         <li><a onclick="applyContentChange(1)">Logowanie</a></li>
         <?php if(isset($_SESSION['Mod']) && $_SESSION['Mod'] == 1):  ?><li><a onclick="applyContentChange(2)">Placeholder</a></li>
            <?php endif;?>
        <?php if(!isset($_SESSION['Mod']) || $_SESSION['Mod'] == 0):  ?> <li><a onclick="applyContentChange(3)">Tatry</a></li> <?php endif;?>
        </ul>
    </aside>
    <section id="content">
      <section id="logowanie">
        <form action="zaloguj.php" method="post">
            <h1>Login:</h1>
            <input type="text" name="login" id="login">
            <h1>Hasło:</h1>
            <input type="password" name="password" id="password">
            <hr>
            <input type="submit" value="Gówno">
        </form>
      </section>
      <section id="placeholder">
        <form action="dodaj.php" method="post">
            <h1>Imie:</h1>
            <input type="text" name="name" id="name">
            <h1>Nazwisko:</h1>
            <input type="text" name="lastName" id="lastName">
            <h1>Login:</h1>
            <input type="text" name="log" id="log">
            <h1>Hasło:</h1>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="Utwórz użytkownika">
        </form>
      </section>
      <section id="tatry">
        <img src="<?= $foto?>">
        <p><?= $opis; ?></p>
    </section>
    </section>
    </main>
    <footer>
        <h2>Copyright by Bomardiro Crocodilo!</h2>
    </footer>
</body>
</html>

<script>
let contentChange = 1;
let logowanie = document.getElementById("logowanie");
let placeholder = document.getElementById("placeholder");
let tatry = document.getElementById("tatry");

function applyContentChange(number)
{
    contentChange = number;
    switch(contentChange){
    case 1: 
        logowanie.style.display = "block";
        placeholder.style.display = "none";
        tatry.style.display = "none";
        break;
    case 2:
        logowanie.style.display = "none";
        placeholder.style.display = "block";
        tatry.style.display = "none";
        break;
    case 3:
        logowanie.style.display = "none";
        placeholder.style.display = "none";
        tatry.style.display = "block";
        break;

    console.log(contentChange);
}
}

</script>

<?php

$polaczenie->close();

?>