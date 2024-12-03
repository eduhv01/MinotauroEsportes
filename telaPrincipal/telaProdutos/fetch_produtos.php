<?php

include_once "../../config.php";

$query = "SELECT id, nome, preco, imagem FROM produto";
$result = mysqli_query($conexao, $query);


$products = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = [
            "id" => $row['id'],
            "name" => $row['nome'],
            "price" => "R$ " . number_format($row['preco'], 2, ',', '.'),
            "imgSrc" => $row['imagem']
        ];
    }

    echo json_encode(["status" => "success", "products" => $products]);
} else {
    echo json_encode(["status" => "error", "message" => "Erro ao buscar produtos."]);
}


mysqli_close($conexao);

?>
