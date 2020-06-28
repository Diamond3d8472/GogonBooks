<?php
session_start();
 //incluindo conexao
 include_once('../../conexao.php');
//fim 
//passano id para o select
  $id = $_REQUEST['user'];
  $sql = "DELETE FROM usuariosgo WHERE ID_User = $id;";
//verifica se deu tudo certo
  if (mysqli_query($con, $sql) === TRUE) {
    $_SESSION['delerro'] = "Usuario deletado com sucesso";
    header("Location: ../../index.php?page=Show/Usuarios/ShowUseradm");
  } 
// se deu errado (normal) entao ele printa um script alert 
  else {
    $_SESSION['delerro'] = "Usuario nao deletado tente novamente";
    header("Location: ../../index.php?page=Show/Usuarios/ShowUseradm");
  }
  ?>