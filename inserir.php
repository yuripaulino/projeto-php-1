<?php
include 'conn.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$dt_cad = $_POST['dt_cad'];
$qtd_part = $_POST['qtd_part'];

$sql = "INSERT Into BANDAS(ID_BANDAS,NOME_BANDAS,DATA_CADASTRO,QTD_PARTICIPANTE)
Values($id,'$nome','$dt_cad',$qtd_part)";

$result = $conn->query($sql);

header('Location: http://localhost/projPHP/projeto-php/index.php');