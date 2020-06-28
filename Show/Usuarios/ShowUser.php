<?php
    if (isset($_SESSION['usuarioId'])|| isset($_SESSION['usuarioNiveisAcessoId']) && $_SESSION['usuarioNiveisAcessoId'] == '1'){
?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
        <div class=" col-md-12 text-center">   
                    <img class="card-img-top rounded mx-auto d-block" style = "max-width: 300px;" src="../../gobooks/img/profile.png" alt="Card image cap">
                    <h1 class="font-weight-light"><?php echo $_SESSION['usuarioNome'];?></h1>
                    </br>
                </div>
        <div class = "container">
        <form method="post" enctype="multipart/form-data" action="index.php?page=Show/Usuarios/EditUser&user=<?php echo $_SESSION['usuarioId'];?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" name = "nome" value="<?php echo $_SESSION['usuarioNome'];?>" placeholder="<?php echo $_SESSION['usuarioNome'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" name = "email" value="<?php echo $_SESSION['usuarioEmail'];?>" placeholder="<?php echo $_SESSION['usuarioEmail'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu endereço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" name = "endereco" value="<?php echo $_SESSION['usuarioEndereço'];?>" placeholder="<?php echo $_SESSION['usuarioEndereço'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu CPF</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" name = "cpf" value="<?php echo $_SESSION['usuarioCpf'];?>" placeholder="<?php echo $_SESSION['usuarioCpf'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" name = "usuario" value="<?php echo $_SESSION['usuarioUsername'];?>" placeholder="<?php echo $_SESSION['usuarioUsername'];?>" required>
                </div>
                <!-- /.Inserir File -->               
                <button type="submit" class="btn btn-primary btn-block">Editar</button>
                </form>
          </div>
        </div>
    </div>
</div>
<?php
}
    else header("Location: index.php");
?>