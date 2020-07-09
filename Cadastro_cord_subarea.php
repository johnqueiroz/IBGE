<?php

$conexao = mysqli_connect('localhost', 'root', '', '');


$nome = $_POST["nome_CordSubrea"];
$numeroSiape = $_POST["siape_Subarea"];
$email = $_POST["email_CordSubarea"];
$telefone = $_POST["telefone_CordSubarea"];
$subareaDoCcs = $_POST["Subarea_cord"];



$sql = "INSERT INTO cord_subarea;

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>