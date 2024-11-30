<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minotauro Esportes</title>
    <link rel="stylesheet" href="login-configs/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
</head>



<body>
    <nav class="navbar">
    <div class="logo">
        <a href="principal.php"><img src="/MinotauroEsportes/telaPrincipal/assets/img/etc/logo.png" alt="Logo da Minotauro Esportes" class="logo-img" ></a>
    </div>
    <ul class="nav-links">
        <li><a href="adminProdutos/admin-produtos.php">Produtos</a></li>
        <li><a href="lista_msg.php">Mensagens</a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
    </nav>

    <?php
        include_once("../config.php");

        $sql = "SELECT * FROM mensagem";
    
        $query = mysqli_query($conexao,$sql);
    
        while($mensagem = mysqli_fetch_array($query)) {
    
            echo "
            <div class='mensagem'>
                <p><b>Nome:</b> $mensagem[nome]</p>
                <p><b>Email:</b> $mensagem[email]</p>
                <p><b>Mensagem:</b> $mensagem[mensagem]</p>
                <form method='POST' action='excluir_mensagem.php'>
                    <input type='hidden' name='id' value='$mensagem[id]'>
                    <button type='submit'>Excluir</button>
                </form>
            </div>";
            
        }  
    
        if(!$query){
            die("Connection failed.");
        }
    ?>

    <footer class="footer">
        <div class="footer-links">
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Serviço</a>
            <a href="#">Suporte</a>
        </div>
        <p>&copy; 2024 Minotauro Esportes. Todos os direitos reservados.</p>
    </footer>
    <script src="assets/js/principal.js"></script>
</body>
</html>

