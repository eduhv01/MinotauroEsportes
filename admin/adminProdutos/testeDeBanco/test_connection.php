<?php
include 'db_connection.php';

if ($conn) {
    echo "Conexão bem-sucedida com o banco de dados!";
} else {
    echo "Erro ao conectar com o banco.";
}

$conn->close();
?>
