<?php
if(isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == "1" ){
		
	 
	include("conexao.php");
	$result_usuarios = "SELECT * FROM livrosgo";
	$resultado_usuarios = mysqli_query($con, $result_usuarios);
?>
<div class="container">
            <div class="card border-0 shadow my-3">
                <div class="card-body p-3">
                <div class=" col-md-12 text-center">   
                    <img class="card-img-top rounded mx-auto d-block" style = "max-width: 300px;" src="../../gobooks/img/book.png" alt="Card image cap">
                    <h1 class="font-weight-light">Livros Cadastrados</h1>
                    </br>
                </div>
					<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>Codigo</th>
							<th>Nome</th>
							<th>Autor</th>
							<th>Açoes</th>
						</tr>
					</thead>
					<tbody>
                    <?php
					while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
					?> 
						<tr>
							<td><?php echo ''.$row_usuario['ID_Livro'];?></td>
							<td><?php echo ''.$row_usuario['Nome_Livro'];?></td>
							<td><b><?php echo ''.$row_usuario['Autor'];?></b></td>
							<td style="text-align: center;"><a href="Show/Livros/del.php?Livro=<?php echo $row_usuario['ID_Livro']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir livro">
                                   Excluir<span class="glyphicon glyphicon-remove"></span></a>
                                   <a href="index.php?page=Show/Livros/EditLivro&Livro=<?php echo $row_usuario['ID_Livro']; ?>" type="button" class="btn btn-default btn-warning" aria-label="Excluir livro">
                                   Editar<span class="glyphicon glyphicon-remove"></span></a>
   						</td>
						</tr>
				<?php
                    }
				?>
				</tbody>
					</table>
					<p class="text-center mt-2 text-success">
                      <?php
                        if(isset($_SESSION['delerro'])){
                          echo  $_SESSION['delerro'];
                    	  unset($_SESSION['delerro']);
                        }
                      ?>
                      </p>
					</div>

				</div>
			</div>
<?php
     }
	else header("Location: index.php");
	 ?>