<?php
include('../db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_comentario = $_POST['nome_comentario'];
    $comentario = $_POST['comentario'];
    $data_comentario = date('Y-m-d H:i:s');

    $query = "INSERT INTO comentarios (nome_comentario, comentario, data_comentario) VALUES ('$nome_comentario', '$comentario', '$data_comentario')";
    mysqli_query($conn, $query);
}

$query = "SELECT * FROM comentarios ORDER BY data_comentario DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="../comentários/comentarios.css">
    <script src="../comentários/comentarios.js"></script>
</head>
<body>
    <h1>Comentários</h1>

    <form action="comentarios.php" method="POST">
        <input type="text" name="nome_comentario" placeholder="Seu nome" required>
        <textarea name="comentario" placeholder="Escreva seu comentário" required></textarea>
        <input type="submit" value="Enviar">
    </form>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row['nome_comentario'] . ": " . $row['comentario'] . " - " . $row['data_comentario'] . "</p>";
    }
    ?>
</body>
</html>
