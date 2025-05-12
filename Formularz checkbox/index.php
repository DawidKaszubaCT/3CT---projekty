<?php 
$polaczenie = new mysqli('localhost','root','','checkbox');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Banerunio</h1></header>
    <main>
        <section class="left">
           <form action="index.php" method="post">
             <?php 
             $result = $polaczenie->query("SELECT Nazwa FROM checkboxy");
             while(list($Kandydat) = $result->fetch_row())
             {
                echo <<<teehee
                <input type="checkbox" name="kurok[]" id="$Kandydat" value="$Kandydat">$Kandydat</input>
                teehee;
             }
             ?>

            <input type="submit" value="Wyślij">
           </form>
        </section>
        <section class="right">
            <?php 
            $wynik = '';
            if(isset($_POST['kurok']))
            {
                $kurok = $_POST['kurok'];
                foreach($kurok as $polityk)
                {
                   echo <<<PIS
                   "$polityk" 
                   PIS;
                   $wynik.=$polityk.' ';
                };
                $polaczenie->query("INSERT INTO submit(Output) VALUES ('$wynik')");
            }
            ?>
        </section>
    </main>
    <footer><h2>Copyright by Lizakunio niesmakunio!</h2></footer>
</body>
</html>

<?php $polaczenie->close();?>
