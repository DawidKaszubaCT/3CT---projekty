<?php
$polaczenie = new mysqli('localhost', 'root', '', 'skleprowerowy');

$zap = $polaczenie->query('SELECT nazwa, url, typ FROM rowery ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Banerunio</h2>
    </header>
    <main>
      <aside>
        <form action="index.php" method="post"><select name="selectunio" onchange="this.form.submit()">
            <option value="0" <?php echo $_POST['selectunio']==0?"selected":"" ?>>Strona główna</option>
            <option value="1" <?php echo $_POST['selectunio']==1?"selected":"" ?>>Rowery górskie</option>
            <option value="2" <?php echo $_POST['selectunio']==2?"selected":"" ?>>Rowery miejskie</option>
            <option value="3" <?php echo $_POST['selectunio']==3?"selected":"" ?>>Rowery elektryczne</option>
        </select>
        </form> 
      </aside>
      <section id="content">
       <?php
        if(isset($_POST['selectunio']))
        {
          switch($_POST['selectunio'])
          {
            case 0:
              echo("Strona główna");
              break;
            case 1:
              $zapytanie = $polaczenie->query("SELECT nazwa, url, typ FROM rowery WHERE typ = 'gorski'");
              if($zapytanie && $zapytanie->num_rows > 0){
                  while($row = $zapytanie->fetch_assoc()) {
                    $nazwa = $row['nazwa'];
                    $url = $row['url'];
                    $typ = $row['typ'];
                    echo("<section class='bike'><img src='$url'><p>Nazwa: $nazwa</p><p>Typ: $typ</p></section>");
                  }
              }
              break;
            case 2:
              $zapytanie = $polaczenie->query("SELECT nazwa, url, typ FROM rowery WHERE typ = 'miejski'");
              if($zapytanie && $zapytanie->num_rows > 0){
                  while($row = $zapytanie->fetch_assoc()) {
                    $nazwa = $row['nazwa'];
                    $url = $row['url'];
                    $typ = $row['typ'];
                    echo("<section class='bike'><img src='$url'><p>Nazwa: $nazwa</p><p>Typ: $typ</p></section>");
                  }
              }
              break;
            case 3:
              $zapytanie = $polaczenie->query("SELECT nazwa, url, typ FROM rowery WHERE typ = 'elektryk'");
              if($zapytanie && $zapytanie->num_rows > 0){
                  while($row = $zapytanie->fetch_assoc()) {
                    $nazwa = $row['nazwa'];
                    $url = $row['url'];
                    $typ = $row['typ'];
                    echo("<section class='bike'><img src='$url'><p>Nazwa: $nazwa</p><p>Typ: $typ</p></section>");
                  }
              }
              break;
            
          }
        }
       ?>
      </section>
    </main>
    <footer>
<h2>Copyright by Damianiunio smrodulunio!</h2>
    </footer>
    <?php 
   $polaczenie->close();
    ?>
    
</body>
</html>