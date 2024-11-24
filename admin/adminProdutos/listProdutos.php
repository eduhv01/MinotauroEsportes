<?php
require_once('testeDeBanco/db_connection.php');
$query = "SELECT * FROM produto";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Erro na consulta: ' . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    echo "<p>Nenhum produto encontrado.</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Produtos</title>
    <link rel="stylesheet" href="css/list_styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th>Destaque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>R$ " . $row['preco'] . "</td>";
                    if (!empty($row['imagem'])) {
                        echo "<td><img src='/MinotauroEsportes/imagens/" . $row['imagem'] . "' alt='" . $row['nome'] . "' width='50' height='50'></td>";
                    } else {
                        echo "<td><p>Imagem não disponível</p></td>";
                    }
                    echo "<td>" . ($row['destaque'] ? 'Sim' : 'Não') . "</td>";
                    echo "<td>
                            <a href='adminProdutos/editar_produto.php?id=" . $row['id'] . "'><button>Editar</button></a>
                            <a href='adminProdutos/deletar_produto.php?id=" . $row['id'] . "'><button>Excluir</button></a>

                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
