<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto2');


$nomeDaArea = $_POST["nome_area"];
$endereco = $_POST["endereco_area"];
$telefone = $_POST["telefone_area"];



$sql = "INSERT INTO area

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>