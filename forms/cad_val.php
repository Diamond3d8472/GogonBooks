<?php
    session_start();
    include_once("../conexao.php");
    if((isset($_POST["usuario"])) && (isset($_POST["senha"]))){
        $nome = mysqli_real_escape_string($con,$_POST["nome"]);
        $email = mysqli_real_escape_string($con,$_POST["email"]);
        $usuario = mysqli_real_escape_string($con,$_POST["usuario"]);
        $cpf = mysqli_real_escape_string($con,$_POST["cpf"]);
        $endereco = mysqli_real_escape_string($con,$_POST["endereco"]);
        $senha = mysqli_real_escape_string($con,$_POST["senha"]);
        $senha = hash('sha512',$senha);

        $insert = "INSERT INTO usuariosgo (nome,username,senha,email,cpf,endereco)VALUES ('$nome', '$usuario', '$senha', '$email','$cpf','$endereco')";
        
        $checknu = "SELECT * FROM usuariosgo WHERE username = '$usuario'";
        $sqlchecknu = mysqli_query($con,$checknu);
        $rowsnu = mysqli_num_rows($sqlchecknu);// número de vezes em que esse username aparece na consulta
        //

        // efetua uma consulta à tabela com o email passado pelo usuário
        $checkne = "SELECT * FROM usuariosgo WHERE email = '$email'";
        $sqlcheckne = mysqli_query($con,$checkne);
        $rowsne = mysqli_num_rows($sqlcheckne);
        //
        $checkni = "SELECT * FROM usuariosgo WHERE cpf = '$cpf'";
        $sqlcheckni = mysqli_query($con,$checkni);
        $rowsni = mysqli_num_rows($sqlcheckni);
        //  
        if ($rowsnu == 0 and $rowsne == 0 and $rowsni == 0) {//se o número for zero, popular tabela
            if ($con->query($insert) === TRUE) {// executa a variável de inserção de dados $sql
            $_SESSION['loginErro'] = "Usuario cadastrado com sucesso";
                header("Location: ../login.php");// editar linha para mensagem de cadastro efetuado e redirecionar à login
            } else {
            $_SESSION['loginErro'] = "Algum erro aconteceu";
                header("Location: ../login.php");// editar linha para mensagem de erro de cadastro e redirecionar à login
            }
        }
        elseif($rowsnu != 0){ //se o username existir, mostrar mensagem dizendo que o usuário já existe
                $_SESSION['cadastroerro'] = "Usuário ja existe";
                header("Location: ../index.php?page=CadUser");
        }
        elseif ($rowsne != 0){ //se o email existir, mostrar mensagem dizendo que o email já existe
                $_SESSION['cadastroerro'] = "Email ja existe";
                header("Location: ../index.php?page=CadUser"); // editar linha para mensagem de erro
        }
        elseif ($rowsni != 0){
                $_SESSION['cadastroerro'] = "Cpf ja existe";
                header("Location: ../index.php?page=CadUser");
        }        
    }else{
        $_SESSION['cadastroerro'] = "Um erro aconteceu tente novamente";
        header("Location: ../index.php?page=CadUser");
    }

