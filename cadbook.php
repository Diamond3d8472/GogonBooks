
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Cadastrar livro</h1>
        <div class = "container">
        <form method="post" enctype="multipart/form-data" action="forms/cad_book.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do livro</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nomelivro" placeholder="Entre com o nome do livro">
                    <small id="emailHelp" class="form-text text-muted ">Campo não pode ficar em branco. </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Editora</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "editora" placeholder="Entre com o nome da Editora">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ISBN</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "isbn" placeholder="Entre com o ISBN">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Autor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "autor" placeholder="Entre com o nome do Autor">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paginas</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "paginas" placeholder="Entre com o numero de paginas">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Preço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "preco" placeholder="Entre com o Preço">
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <?php
                    include_once("conexao.php");
                    $busca = "SELECT * FROM categorias";
                    $result = $con->query($busca);
                ?>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categorias</label>
                    <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['ID_Categoria']?>"><?php echo $row['Nome_Categoria']?></option>
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
                                max="3000-12-31" class="form-control">
                <div class="form-group">
                    <label for="exampleTextarea">Descrição</label>
                    <textarea class="form-control" id="exampleTextarea" name = "descricao" rows="3"></textarea>
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
                <button type="submit" class="btn btn-primary">Salvar</button>
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
 
