<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <title>GogonBooks</title>
            <link rel="icon" type="imagem/ico" href="imagens/favicon.ico" />

            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/index.css">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        </head>
        <body class="d-flex flex-column">
        <div id="page-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img/GogonBooksV2.png" alt="Logo" style="width:40px;"></a>
        <!--Barra de pesquisa-->
        <div class="h-100">
            <div class="d-flex justify-content-center h-100">
            <form method="POST" id="mail_form" action="index.php?page=Show/Livros/Search">
                <div class="searchbar">
                    <input class="search_input" type="text" name="pesquisa" placeholder="Search...">
                    <a href="#" class="search_icon" onClick="document.getElementById('mail_form').submit();"><i class="fas fa-search"></i></a>
                </div>
            </form>
            </div>
        </div>
         <!--Fim da barra de pesquisa-->
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Categorias</a>
            </li>
            <?php
            if (isset($_SESSION['usuarioId']) and $_SESSION['usuarioNiveisAcessoId'] == 1){
               echo '<li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Administrativo
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php?page=cadbook">Cadastrar Livro</a>
                      <a class="dropdown-item" href="index.php?page=Show/Livros/showbookadm">Ver todos Livros</a>
                      <a class="dropdown-item" href="index.php?page=Show/Usuarios/ShowUserAdm">Ver usuarios</a>
                    </div>
                </li>';
            }
            else echo ''
            ?>
        </ul>
            <ul class = "navbar-nav">
            <li class="nav-item">
            <?php
                if(isset($_SESSION['usuarioId'])){
                    echo '<a class ="nav-link" href="index.php?page=Show/Usuarios/ShowUser">'.$_SESSION['usuarioNome'].'</a>';
                    echo'</li><li class="nav-item">';
                    echo '<a class ="nav-link" href="#">Meus livros</a>';
                    echo'</li><li class="nav-item">';
                    echo '<a class ="nav-link" href="forms/sair.php">Sair</a>';
                    echo'</li>';

                }
                else{
                   echo '<a class="nav-link" href="login.php">Entrar</a>';
                   echo'</li><li class="nav-item">';
                   echo '<a class="nav-link" href="index.php?page=CadUser">Registrar</a>';
                   echo'</li>'; 
                }
            ?>
            </li>
            </ul>
        </div>
        </nav>

        <?php 
            $page='';
            if(empty($_REQUEST['page'])){
        ?>
        <!--carousel-->
        
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <a href="#">
                    <!-- carousel-item -->
                    <picture>
                     <source srcset="img/pc2000_500.jpg" media="(min-width: 1400px)">
                      <source srcset="img/pc1400_500.jpg" media="(min-width: 769px)">
                       <source srcset="img/pc800_500.jpg" media="(min-width: 577px)">
                      <img srcset="img/pc600_500.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                            <b><h2 style="color: brown; text-decoration: underline; ">Pequeno Principe</b></h2>
                            <p ><h3 style="color: #0033cc">Promoção: 20% de desconto</p>    
                            
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="carousel-item">
                <a href="#">
                     <picture>
                      <source srcset="img/rr2000_500.jpg" media="(min-width: 1400px)">
                      <source srcset="img/rr1400_500.jpg" media="(min-width: 769px)">
                       <source srcset="img/rr800_500.jpg" media="(min-width: 577px)">
                      <img srcset="img/rr600_500.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                        <b><h2 style="color: #3333ff; text-decoration: underline; ">Historia Russa, Cap 1</b></h2>
                            <p ><h3 style="color: #0033cc">Promoção: 40% de desconto</p>    
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                     <picture>
                     <source srcset="img/mc2000_500.jpg" media="(min-width: 1400px)">
                      <source srcset="img/mc1400_500.jpg" media="(min-width: 769px)">
                       <source srcset="img/mc800_500.jpg" media="(min-width: 577px)">
                      <img srcset="img/mc600_500.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                        <b><h2 style="color: #66ffcc; text-decoration: underline; ">Conde De Monte Cristo</b></h2>
                            <p ><h3 style="color: #66ffcc">Promoção: 20% de desconto</p>    
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                     <picture>
                      <source srcset="img/ce2000_500.jpg" media="(min-width: 1400px)">
                      <source srcset="img/ce1400_500.jpg" media="(min-width: 769px)">
                       <source srcset="img/ce800_500.jpg" media="(min-width: 577px)">
                      <img srcset="img/ce600_500.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                        <b><h2 style="color: #33ccff; text-decoration: underline; ">A Culpa é Das Estrelas</b></h2>
                            <p ><h3 style="color: #33ccff">Promoção: 20% de desconto</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->

<!-- /.container -->

<!-- Page conteudo -->

<div class="container"> <!-- /. container-fluid -->

    
    <h1 class="my-4">
        <small>Produtos</small>
    </h1>

    <div class="row"> <!-- Row conteudos-->
    <?php
    include_once('conexao.php');

    $busca = 'SELECT * FROM livrosgo;';
    $result = $con->query($busca);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {        
    ?>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4 w3-animate-zoom ">
        <div class="card h-100">
          <a href="index.php?page=Show/Livros/showbook&livro=<?php echo $row["ID_Livro"];?>"><img class="card-img-top" src="<?php echo $row["Caminho_Foto"]  ?>" alt=""></a>
          <div class="card-body">
            <h2 class="card-title">
              <a href="index.php?page=Show/Livros/showbook&livro=<?php echo $row["ID_Livro"];?>"><?php echo $row["Nome_Livro"] ?></a>
            </h2>
            <h5>Autor: <?php echo $row["Autor"] ?>
                <p>
                R$ <?php echo $row["Preco_Livro"] ?>
                </p>
            </h5>
          </div>
          <button type="button" class="btn btn-lg btn-default"><h5><a href="index.php?page=Show/Livros/LerLivro&id=<?php echo $row["ID_Livro"];?>">Ler Livro</h5></a></button>
        </div>  
      </div>
  <?php }
    }
    $con->close();
  ?>
    </div> <!-- /. Row conteudos-->

</div><!-- /. container-fluid -->
<!-- /. conteudo -->

<!-- Roda pé-->
<?php }else{
          $pagina = $_REQUEST['page'];
          include ($pagina.'.php');
        }
        ?>
</div>

</body>
</html>
