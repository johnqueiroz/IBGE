<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nomeDaSubarea = $_POST["nome_subarea"];
$enderecoDaSubarea = $_POST["endereco_subarea"];
$telefone = $_POST["telefone_subarea"];
$areaPertencente = $_POST["areaPertencente"];




$sql = "INSERT INTO subarea;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>