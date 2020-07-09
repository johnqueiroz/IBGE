<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$especificacoes = $_POST["especificacoes"];
$patrimonio = $_POST["patrimonio"];
$serie = $_POST["serial"];
$data_recebimento= $_POST["data_recebimento"];
$qtd_equipamentos_recebidos = $_POST["quantidade_recebidos"];




$sql = "INSERT INTO eqp_compatrimonio 

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>