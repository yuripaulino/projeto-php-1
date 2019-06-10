<?php

$conn = new mysqli
('localhost',
'admin',
'root',
'Festival');

if(mysqli_connect_error()){
    echo 'Erro de conexao';
}else{
    echo 'Deu certo pivete!';
}

