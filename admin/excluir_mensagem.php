<?php
include_once("../config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $id = mysqli_real_escape_string($conexao, $id);

    $sql = "DELETE FROM mensagem WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);

    if ($result) {
        echo "Mensagem excluída com sucesso.";
        header("Location: lista_msg.php");
        exit;
    } else {
        echo "Erro ao excluir a mensagem: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>
