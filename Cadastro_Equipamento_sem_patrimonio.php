<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$especificacoes = $_POST["especificacoes"];
$data_recebimento= $_POST["data_recebimento"];
$qtd_equipamentos_recebidos = $_POST["quantidade_recebidos"];
$id = $_POST["id_semPatrimonio"];




$sql = "INSERT INTO eqp_sempatrimonio

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>