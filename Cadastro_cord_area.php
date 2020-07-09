<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nome = $_POST["nome_CordArea"];
$numeroSiape = $_POST["siape_area"];
$email = $_POST["email_CordArea"];
$telefone = $_POST["telefone_CordArea"];
$areaDoCordenador = $_POST["area_Cord"];



$sql = "INSERT INTO cord_area;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>