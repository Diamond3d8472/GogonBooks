<?php
    Session_start();
    include_once("../conexao.php");
    //Bloco que verifica se o livro ja existe e entra com os dados
    if(isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == "1" ){
    if ( isset( $_FILES[ 'arquivo2' ][ 'name' ] ) && $_FILES[ 'arquivo2' ][ 'error' ] == 0 ) {
        $arquivo_tmp2 = $_FILES[ 'arquivo2' ][ 'tmp_name' ];
        $nome2 = $_FILES[ 'arquivo2' ][ 'name' ];
        //
        $extensao2 = pathinfo ( $nome2, PATHINFO_EXTENSION );
        //
        $extensao2 = strtolower ( $extensao2 );
        //
    if ( strstr ( '.pdf', $extensao2 ) ) {

            $novoNome2 = uniqid ( time () ) .'Conteudo'. '.' . $extensao2;
         
            // Concatena a pasta com o nome
            $destino2 = 'pdf/' . $_POST['isbn'] . '-' . $novoNome2;
            $destinosite2 = '../'. $destino2;
            $destino2;
            // tenta mover o arquivo para o destino
    if ( @move_uploaded_file ( $arquivo_tmp2, $destinosite2 ) ) {
    //Salvar a foto
    if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
        $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
        $nome = $_FILES[ 'arquivo' ][ 'name' ];
     
        // Pega a extensão,
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
     
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
     
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            $novoNome = uniqid ( time () ) .'imagem'. '.' . $extensao;
     
            // Concatena a pasta com o nome
            $destino = 'imagens/livros/' . $_POST['isbn'] . '-' . $novoNome;
            $destinosite = '../'. $destino;
     
            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destinosite ) ) {
                //Salvar o livro
                if (isset($_POST['nomelivro'])){
                    //DECLARANDO AS VARIAVEIS
                    $busca = filter_input(INPUT_GET, 'livro', FILTER_SANITIZE_NUMBER_INT);
                    $Autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING); 
                    $caminhoFoto = $destino;
                    $caminhoPdf = $destino2;
                    $nomelivro = filter_input(INPUT_POST, 'nomelivro', FILTER_SANITIZE_STRING); 
                    $Editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING); 
                    $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_NUMBER_INT);
                    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);                    
                    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_NUMBER_INT);
                    $precolivro = $_POST['preco'];
                    $paginas = filter_input(INPUT_POST, 'paginas', FILTER_SANITIZE_NUMBER_INT);
                    //Pegue a data no formato yyyy-mm-dd
                    $data = $_POST['data'];
                    $insert = "UPDATE livrosgo SET Autor='$Autor',Caminho_Foto='$caminhoFoto',Caminho_Pdf='$caminhoPdf',Data_Pub='$data',Descricao='$descricao',ID_Categoria='$categoria',ISBN='$isbn',
                    Nome_Livro='$nomelivro',Preco_Livro='$precolivro',Paginas='$paginas',editora='$Editora' WHERE ID_Livro='$busca'";
                        if (mysqli_query($con, $insert)) {// verifica se uma linha foi alterada
                        $_SESSION['delerro'] = "Livro alterado com sucesso";
                            header("Location: ../index.php?page=Show/Livros/showbookadm");// Manda mensagem
                            $con->close();
                        } else {
                        $_SESSION['delerro'] = "Algum erro aconteceu". mysqli_error($conn);
                            header("Location: ../index.php?page=Show/Livros/showbookadm");// manda mensagem
                        }
                    }
                else{
                    $_SESSION['delerro'] = "Verifique os campos e tente novamente";
                    header("Location: ../index.php?page=Show/Livros/showbookadm");
                    }
                }
                else{
                    $_SESSION['delerro'] = "Erro ao salvar a foto do arquivo";
                    header("Location: ../index.php?page=Show/Livros/showbookadm");
                    }
                }
            else{
                $_SESSION['delerro'] = "Você poderá enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png";
                header("Location: ../index.php?page=Show/Livros/showbookadm");
                }
            }
        else{
            $_SESSION['delerro'] = "Foto necessaria";
            header("Location: ../index.php?page=Show/Livros/showbookadm");
            }
        }
            else{$_SESSION['delerro'] = "Erro ao salvar o PDF";
            header("Location: ../index.php?page=Show/Livros/showbookadm");}
        }
        else{$_SESSION['delerro'] = "Você poderá enviar apenas arquivos *.PDF";
            header("Location: ../index.php?page=Show/Livros/showbookadm");}
        }
    else{ $_SESSION['delerro'] = "PDF necessario";
        header("Location: ../index.php?page=Show/Livros/showbookadm");}
    }
?>