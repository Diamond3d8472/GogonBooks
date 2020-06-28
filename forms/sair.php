<?php session_start(); // este codigo ira desatribuir este array
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioCpf'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioUsername'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioEndereço']
    );
    header("Location:../index.php")
?>