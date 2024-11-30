<?php

include_once("../config.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

$sql = "INSERT INTO mensagem
    (nome,email,mensagem)
    VALUES ('$nome','$email','$mensagem')";

$query = mysqli_query($conexao,$sql);

if($query){
    echo "Mensagem cadastrada com sucesso.";
}else{
    die("Connection failed.");
}
mysqli_close($conexao);