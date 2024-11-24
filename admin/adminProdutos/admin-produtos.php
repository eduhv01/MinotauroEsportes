<?php
include 'testeDeBanco/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $imagem = $_POST['imagem'] ?? '';
    $destaque = isset($_POST['destaque']) ? 1 : 0;

    if (isset($_POST['add'])) {
        $sql = "INSERT INTO produto (nome, preco, imagem, destaque) VALUES ('$nome', '$preco', '$imagem', $destaque)";
        if ($conn->query($sql)) {
            header("Location: admin-produtos.php");  
            exit();
        } else {
            echo "Erro ao adicionar produto: " . $conn->error;
        }
    }
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $sql = "UPDATE produto SET nome='$nome', preco='$preco', imagem='$imagem', destaque=$destaque WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: admin-produtos.php");
            exit();
        } else {
            echo "Erro ao atualizar produto: " . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM produto WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: admin-produtos.php");  
            exit();
        } else {
            echo "Erro ao excluir produto: " . $conn->error;
        }
    }
}

$sql = "SELECT * FROM produto";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Produtos</title>
    <link rel="stylesheet" href="css/admin_styles.css"> 
</head>
<body>
<body>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="principal.php">
                <img src="assets/img/etc/logo.png" alt="Logo da Minotauro Esportes" class="logo-img">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="#">HOME</a></li>
            <li><a href="listProdutos.php">Lista de Produtos</a></li>
        </ul>
    </nav>

    <h1>Painel de Administração de Produtos</h1>
    <form method="POST">
        <h2>Adicionar Produto</h2>
        <label>Nome:</label>
        <input type="text" name="nome" required placeholder="Nome">
        <label>Preço:</label>
        <input type="text" name="preco" required placeholder="Preço">
        <label>URL da Imagem:</label>
        <input type="text" name="imagem" placeholder="Imagem">
        <button type="submit" name="add">Adicionar Produto</button>
    </form>

    <hr>
    <h2>Produtos Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Imagem</th>>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="POST">
                <td><?php echo $row['id']; ?></td>
                <td><input type="text" name="nome" value="<?php echo $row['nome']; ?>"></td>
                <td><input type="text" name="preco" value="<?php echo $row['preco']; ?>"></td>
                <td><input type="text" name="imagem" value="<?php echo $row['imagem']; ?>"></td>

                <td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="edit">Salvar</button>
                    <button type="submit" name="delete" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
