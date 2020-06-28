<?php
include_once('conexao.php');
$busca = $_REQUEST['id'];
$sql = "select * from livrosgo where ID_Livro = '$busca' LIMIT 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
while ($rows = $result->fetch_assoc()){
?>
<div class="container">
<div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Ler livro -  <?php echo $rows['Nome_Livro']; ?></h1>
        <div class = "container">
<div class='embed-responsive' style='padding-bottom:150%'>
    <object data= <?php echo $rows['Caminho_Pdf']; ?> type='application/pdf' width='100%' height='100%'></object>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
else{ '<div class="container">
<div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Ler livro</h1>
        <div class = "container">
            <h4 class="font-weight-light">Um erro ocorreu talvez seja o erro</h4>
                </div>
            </div>
        </div>
    </div>
</div>';}
?>