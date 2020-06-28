<?php session_start();
    include_once("../conexao.php");
    $busca = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_NUMBER_INT);
    if (isset($_SESSION['usuarioId']) && $_SESSION['usuarioId'] == $busca || isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == '1'){

    if (isset($_POST['nome'])){
        //DECLARANDO AS VARIAVEIS
        $nome = $_POST['nome']; 
        $endereco = $_POST['endereco'];
        $email = $_POST['email']; 
        $username = $_POST['usuario'];
        $cpf = $_POST['cpf'];
        $insert = "UPDATE usuariosgo SET nome='$nome',endereco='$endereco',email='$email',username='$username',cpf='$cpf' WHERE ID_User='$busca'";
            if (mysqli_query($con, $insert)) {// verifica se uma linha foi alterada
            $_SESSION['cadastroerro'] = "Usuario alterado com sucesso";
                header("Location: ../index.php?page=Show/Usuarios/EditUser&user=$busca");// Manda mensagem
                $con->close();
            } else {
            $_SESSION['cadastroerro'] = "Algum erro aconteceu". mysqli_error($conn);
                header("Location: ../index.php?page=Show/Usuarios/EditUser&user=$busca");// manda mensagem
            }
        }
    else{
        $_SESSION['cadastroerro'] = "Verifique os campos e tente novamente";
        header("Location: ../index.php?page=page=Show/Usuarios/EditUser&user=$busca");
        }
    }
    else header("Location: ../index.php");

?>