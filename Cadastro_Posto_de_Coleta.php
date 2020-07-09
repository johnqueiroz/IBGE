<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nomeDoPostoColeta = $_POST["nome_posto"];
$enderecoPostoColeta = $_POST["endereco_posto"];
$subareaPosto = $_POST["subareaPertencente"];
$telefonePosto = $_POST["telefone_posto"];




$sql = "INSERT INTO posto;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>