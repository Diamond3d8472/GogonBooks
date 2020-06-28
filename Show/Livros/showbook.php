
                <?php
                    $livro = $_GET['livro'];
                    include_once('conexao.php');
                    $busca = "SELECT * FROM livrosgo where ID_Livro = '$livro';";
                    $result = $con->query($busca);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {        
                ?>           
        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">
        
            <!-- Left Column -->
            <div class="w3-third">
            
            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                <img src= "<?php echo $row["Caminho_Foto"]  ?>" style="width:100%" alt="Livro">
                <div class="w3-display-bottomleft w3-container w3-text-white">
                    <h2><?php echo $row["Nome_Livro"] ?></h2>
                </div>
                </div>
                <div class="w3-container">
                <h5 class="w3-xxlarge w3-text-amber"><b>Detalhes do produto</b></h5>
                <p><b>Paginas:</b> <?php echo $row['Paginas'];?> pag.</p>
                <p><b>Editora:</b><?php echo $row['editora'];?></p>
                <p><b>Idioma:</b> Português</p>
                <p><b>ISBN-10:</b> <?php echo $row['ISBN'];?></p>
                <p><b>Dimensão do produto:</b> 28,6 x 22,4 x 2 cm</p>
                <p><b>Peso:</b> 1,2k</p>
                </div>
            </div><br>

            <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">
            
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-margin-right w3-padding-16 w3-xxlarge w3-text-amber"><b><?php echo $row["Nome_Livro"] ?></b></h2>
                <div class="w3-container">
                <h2 class="w3-margin-right w3-padding-8 w3-xxlarge w3-text-dark-grey"><b>R$ <?php echo $row["Preco_Livro"] ?></b></h2>
                <h6 class=" w3-white w3-text-grey w3-margin-right">por Nome(Autor), Nome(Ilustrador)</h6></p>
                </div>
                <div class="w3-container">
                <h3 class="xxlarge w3-text-amber" ><b>Sinopse</b></h3>
                <p><?php echo $row['Descricao'];?></p>
                <hr>
                </div>
                <div class="w3-container">
                <h3 class="xxlarge w3-text-amber"><b>Sobre o autor</b></h3>
                <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. 
                    Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                <hr>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="w3-container">
                <p class="w3-xxlarge w3-text-grey"> <a href="index.php?page=Show/Livros/LerLivro&id=<?php echo $row["ID_Livro"];?>" class="w3-button w3-large w3-circle w3-amber"><img src="img/carrinho.png"></a>Ler Livro</p><br>

                </div>
            </div>

            
            </div>

            <!-- End Right Column -->
            </div>
            
        <!-- End Grid -->
        </div>
        
        <!-- End Page Container -->
        </div>
            </div>
        </div>
    </div>
        <?php } 
            } 
        ?>

        