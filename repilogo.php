<?php
session_start();

//stampa a video
echo "<h1>Lista videogiochi inseriti</h1>";
foreach ($_SESSION['dati'] as $dati) {
    echo "<ul><li>Nome:";
    echo implode(" Voto:", $dati);
    echo "</li></ul>";
}

$nome = "";
$punteggio = 0;
$max = -1;
for ($i=0; $i < sizeof($_SESSION['dati']) ; $i++) {
    if($_SESSION['dati'][$i]['Voto'] > $max)
    {
        $max = $_SESSION['dati'][$i]['Voto'];
        $nome = $_SESSION['dati'][$i]['Nome'];
    } 
}

echo "<br>";
echo "il videogioco che ha il punteggio massimo è: $nome con $max punti";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">indietro</a>
    <br>
    <a href="reset.php">Reset</a>
    <br>
    <a href="repilogo.php">Repilogo</a>
</body>
</html>