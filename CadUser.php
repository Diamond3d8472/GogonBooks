<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Novo Usuario</h1>
        <div class = "container">
        <form method="post" enctype="multipart/form-data" action="forms/cad_val.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nome" placeholder="Entre com o seu Nome" required>
                    <small id="emailHelp" class="form-text text-muted ">Campo não pode ficar em branco. </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email" placeholder="Entre com o seu Email" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu endereço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "endereco" placeholder="Entre com o seu Endereço" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu CPF</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "cpf" placeholder="Entre com o seu CFP" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.Nao coloque pontos</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Seu Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "usuario" placeholder="Entre com o seu Usuario" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite Sua Senha</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "senha" placeholder="Entre com a sua Senha" required>
                    <small id="emailHelp" class="form-text text-muted">Campo não pode ficar em branco.</small>
                </div>
                <!-- /.Inserir File -->               
                <button type="submit" class="btn btn-primary">Salvar</button>
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
 
