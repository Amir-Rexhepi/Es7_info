<?php 
session_start();

//se la session di dati non è stata settata/inizializzata entro nel if;

if(!isset($_SESSION['dati'])){
    $_SESSION['dati'] = array();
}
//inserimento dei dati nella session 
if (isset($_GET['nome'])) {
    if(isset($_GET['voto'])){
            $_SESSION['dati'][] = array(
                "Nome" => $_GET['nome'],
                "Voto" => $_GET['voto'] 
            );
 
    }else{
        echo "inserisci un voto";
    }
}else{
    echo "inserisci un nome";
}
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