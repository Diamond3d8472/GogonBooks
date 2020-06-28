<?php
    $busca = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_NUMBER_INT);
    if (isset($_SESSION['usuarioId']) && $_SESSION['usuarioId'] == $busca || isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == '1'){
    include("conexao.php");
	$result_usuarios = "SELECT * FROM usuariosgo where ID_User='$busca'";
    $resultado_usuarios = mysqli_query($con, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
        <div class=" col-md-12 text-center">   
                    <img class="card-img-top rounded mx-auto d-block" style = "max-width: 300px;" src="../../gobooks/img/profile.png" alt="Card image cap">
                    <h1 class="font-weight-light">Editar Usuario - <?php echo $row_usuario['nome'];?></h1>
                    </br>
                </div>
        <div class = "container">
        <form method="post" enctype="multipart/form-data" action="forms/EditCad.php?user=<?php echo $busca;?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nome" value="<?php echo $row_usuario['nome'];?>" placeholder="<?php echo $row_usuario['nome'];?>" required>
                    <small id="emailHelp" class="form-text text-muted ">Campo não pode ficar em branco. </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email" value="<?php echo $row_usuario['email'];?>" placeholder="<?php echo $row_usuario['email'];?>" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu endereço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "endereco" value="<?php echo $row_usuario['endereco'];?>" placeholder="<?php echo $row_usuario['endereco'];?>" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu CPF</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "cpf" value="<?php echo $row_usuario['cpf'];?>" placeholder="<?php echo $row_usuario['cpf'];?>" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "usuario" value="<?php echo $row_usuario['username'];?>" placeholder="<?php echo $row_usuario['username'];?>" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <!-- /.Inserir File -->               
                <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
                <?php 
                    if(isset($_SESSION['cadastroerro'])){
                    echo $_SESSION['cadastroerro'];
                    unset($_SESSION['cadastroerro']);
                    }
                ?>
          </div>
        </div>
    </div>
</div>
<?php
}
    }
    else header("Location: index.php");
?>