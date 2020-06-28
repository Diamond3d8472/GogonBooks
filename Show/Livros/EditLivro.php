<?php
    if(isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == "1" ){
    include_once('conexao.php');
    $busca = filter_input(INPUT_GET, 'Livro', FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM livrosgo WHERE ID_Livro = '$busca'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {

         // output data of each row
         while($row = $result->fetch_assoc()) {
?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Editar livro</h1>
        <div class = "container">
        <form method="post" enctype="multipart/form-data" action="forms/EditLivro.php?livro=<?php echo $busca?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do livro</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomelivro" value="<?php echo $row["Nome_Livro"] ?>" placeholder="<?php echo $row["Nome_Livro"] ?>">
                    <small id="emailHelp" class="form-text text-muted ">Campo não pode ficar em branco. </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Editora</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="editora" value="<?php echo $row["editora"] ?>" placeholder="<?php echo $row['editora'];?>">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ISBN</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="isbn" value="<?php echo $row["ISBN"] ?>" placeholder="<?php echo $row['ISBN'];?>">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Autor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="autor" value="<?php echo $row["Autor"] ?>" placeholder="<?php echo $row['Autor'];?>">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paginas</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="paginas" value="<?php echo $row["Paginas"] ?>" placeholder="<?php echo $row['Paginas'];?>">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Preço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="preco" value="<?php echo $row["Preco_Livro"] ?>" placeholder="<?php echo $row["Preco_Livro"]?>">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <?php
                    include_once("conexao.php");
                    $busca = "SELECT * FROM categorias";
                    $result = $con->query($busca);
                ?>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categorias</label>
                    <select class="form-control" name="categoria" id="exampleFormControlSelect1" require>
                    <?php
                    if ($result->num_rows > 0) {
                        while($rowCat = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $rowCat['ID_Categoria']?>"><?php echo $rowCat['Nome_Categoria']?></option>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    $con->close();
                    ?>
                    </select>
                </div>
                <label >Data de publicação</label>
                        <input type="date" name="data" min="1000-01-01"
                                max="3000-12-31" class="form-control" value="<?php echo $row["Data_Pub"]?>">
                <div class="form-group">
                    <label for="exampleTextarea">Descrição</label>
                    <textarea class="form-control" id="exampleTextarea" name = "descricao" rows="3"><?php echo $row["Descricao"]?></textarea>
                </div>

                <!-- Inserir File -->
                <div class="form-group">
                    <label for="exampleInputFile">Conteudo em PDF</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name = "arquivo2" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Selecione o PDF do livro.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Imagem do livro</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name = "arquivo" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Selecione a Imagen do livro.</small>
                </div>
                <!-- /.Inserir File -->               
                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                <?php 
                    if(isset($_SESSION['livroStatus'])){
                    echo $_SESSION['livroStatus'];
                    unset($_SESSION['livroStatus']);
                    }
                ?>
          </div>
        </div>
    </div>
</div>
<?php } 
        }
        else{ echo '<div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <h1 class="font-weight-light">Cadastrar livro</h1>
                <div class = "container">
                    <h1 class="font-weight-light">Erro</h1>
                </div>
                </div>
                </div>
                </div>';}
    }
        else{
            header("Location: index.php");
        }
    ?>
