<?php
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "gogonbooks";
    $con = mysqli_connect($server,$usuario,$senha,$bd);
    if(!$con){
        die("Falha na conexao: " . mysqli_connect_error());
    }
    /*else{
        echo"conexao estabelecida";
    }*/
?>
