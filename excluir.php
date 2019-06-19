<?php
include 'conn.php';

$id  = $_GET['id'];
$sql = "DELETE from BANDAS Where ID_BANDAS = $id";

$result = $conn->query($sql);

header('Location: http://localhost/projPHP/projeto-php/index.php');