<div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Resultados da pesquisa</h1>
            <div class="row">
<?php
    include_once('conexao.php');
    $pesquisa = $_POST['pesquisa'];
$busca = "SELECT * FROM livrosgo where Nome_Livro Like '%$pesquisa%'";
$result = $con->query($busca);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 w3-animate-zoom">
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
            <button type="button" class="btn btn-light btn-lg" href = ""><h5>Adicionar ao Carrinho</h5></button>
          </div>
        </div>
      </div>
<?php
    }
} else {
    echo "
    <h4 class='card-title'>Nao foram encontrados nenhum livro</h4>";
    echo "<img class='card-img-top rounded mx-auto d-block' style = 'max-width: 600px;' src='../../gobooks/img/NoBook.png' alt='Card image cap'>";
}
$con->close();
?>      </div>
        </div>
    </div>