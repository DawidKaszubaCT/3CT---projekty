<?php 
$polaczenie = new mysqli('localhost','root','','sredniaocen');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Średnia ocen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Banerunio</h1></header>
    <main>
        <section class="left">
            <form action="index.php" method="post">
                <select name="selectunio[]" id="selectunio" multiple>
                    <?php $result = $polaczenie->query('SELECT DISTINCT Przedmiot FROM oceny');
                    while(list($Przedmiot) = $result->fetch_row())
                    {
                        echo <<<Dupa
                        <option value="$Przedmiot">$Przedmiot</option>                  
                        Dupa;
                    };
                    ?>
                </select>
                <input type="submit" value="Wyslij">
            </form>
        </section>
        <section class="right">
            <?php if(isset($_POST['selectunio']))
            {
              $jeff = $_POST['selectunio'];
              $l1 = 0;
              $l2 = 0;
              $Przedmioty = '';
              foreach($jeff as $greg)
              {
                $zapytanie = $polaczenie->query("SELECT Ocena FROM oceny WHERE Przedmiot = '$greg'");
                while(list($Ocena) = $zapytanie->fetch_row())
                    {
                        $l1 = $l1 + $Ocena;
                        $l2++;
                    };
                $Przedmioty.= ' '.$greg;
              }
              $srednia = $l1 / $l2;
              echo <<<Dupa
                <p>Twoja średnia z przedmiotów $Przedmioty to: $srednia</p>
              Dupa;
            };
            ?>
        </section>
    </main>
    <footer><h2>Copyright by "KOCHANI!"</h2></footer>
</body>
</html>

<?php $polaczenie->close();?>