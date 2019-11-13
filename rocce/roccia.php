<?php
//http://localhost/php/rocce/roccia.php?nome=Gneiss&peso=2.6&tipoRoccia=metamorfiche&colore=bianco&colore=nero&colore=verde

    $nome = $_REQUEST["nome"];
    $peso = $_REQUEST["peso"];
    $tipo = $_REQUEST["tipoRoccia"];
    $colore = $_GET["colore"];  //array

    echo "nome: " . $nome . "<br> " . "peso: " . $peso .  " tonnellate/m^3 " . "<br>" . "tipo: " . $tipo . "<br> " . "colore: <br>";

    

    foreach($colore as $col){
        echo $col . "<br>";
    }
?>

