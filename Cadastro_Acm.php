<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nome = $_POST["nome_acm"];
$email = $_POST["email_acm"];
$telefone = $_POST["telefone_acm"];
$postoDoAcm = $_POST["posto_acm"];
$id = $_POST["id_acm"]"


$sql = "INSERT INTO acm_posto;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>