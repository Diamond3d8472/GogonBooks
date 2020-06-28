<?php
    session_start();
    include_once("../conexao.php");

    //começando para ver se a variavel global foi ativa
    if ((isset($_POST['username'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($con, $_POST['username']); //Tentando evitar o sql inject
        $senha = mysqli_real_escape_string($con, $_POST['senha']);
        $hashsenha = hash('sha512',$senha);

        $resultado_user = "SELECT * FROM usuariosgo WHERE username = '$usuario' && senha = '$hashsenha' LIMIT 1";
        $resultado_usuario = mysqli_query($con,$resultado_user);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['ID_User'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioCpf'] = $resultado['cpf'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioUsername'] = $resultado['username'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioEndereço'] = $resultado['endereco'];

            header("Location: ../index.php");

        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
}else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../login.php");
}

?>