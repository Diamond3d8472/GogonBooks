<?php
session_start();
 //incluindo conexao
 include_once('../../conexao.php');
//fim 
//passano id para o select
  $id = $_REQUEST['Livro'];
  $sql = "DELETE FROM livrosgo WHERE ID_Livro = $id;";
//verifica se deu tudo certo
  if (mysqli_query($con, $sql) === TRUE) {
    $_SESSION['delerro'] = "Usuario deletado com sucesso";
    header("Location: ../../index.php?page=Show/Livros/showbookadm");
  } 
// se deu errado (normal) entao ele printa um script alert 
  else {
    $_SESSION['delerro'] = "Usuario nao deletado tente novamente";
    header("Location: ../../index.php?page=Show/Livros/showbookadm");
  }
  ?>