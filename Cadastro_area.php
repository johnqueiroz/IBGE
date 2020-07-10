<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nomeDaArea = $_POST["Nome_area"];
$endereco = $_POST["Endereco_area"];
$telefone = $_POST["Telefone_area"];



$sql = "INSERT INTO area (nome_area, endereco_area, telefone_area)";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>