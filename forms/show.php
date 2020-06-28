<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
img{
    width: 25px;
}
</style>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Autor</th>
    <th>Preço</th>
    <th>descriçao</th>
    <th>ISBN</th>
    <th>Foto</th>
  </tr>

<?php
include_once('../conexao.php');

$busca = 'SELECT * FROM livrosgo;';
$result = $con->query($busca);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cod_livro"] ."</td><td>" .  $row["nome_li"] . "</td><td>" . $row["autor"] . "</td><td>". $row["preco"] . "</td><td>" . $row["descriçao"] . "</td><td>" . $row["isbn"] ."</td><td>"."<img src=".$row['img_dir'].">"."</td>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
</table>