<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome = $_POST["Nome_cord_area"];
$numeroSiape = $_POST["Siape_coord_area"];
$email = $_POST["Email_coord_area"];
$telefone = $_POST["Telefone_coord_area"];
$areaDoCordenador = $_POST["Area_Coord"];



$sql = "INSERT INTO coord_area (nome_CoordArea,	email_CoordArea, telefone_CoordArea, siape_area, area_Coord)";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>