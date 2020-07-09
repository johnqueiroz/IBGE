<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nome = $_POST["nome_acs"];
$email = $_POST["email_acs"];
$telefone = $_POST["telefone_acs"];
$postoDoAcs = $_POST["posto_acs"];
$id = $_POST["id_acs"]"


$sql = "INSERT INTO acs_posto;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>