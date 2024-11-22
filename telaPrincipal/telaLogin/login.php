<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minotauro Esportes</title>
    <link rel="stylesheet" href="login-configs/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="principal.php"><img src="assets/img/etc/logo2.png" alt="Logo da Minotauro Esportes"
                    class="logo-img"></a>
        </div>
        <ul class="nav-links">
            <i class="fa-solid fa-user-secret"></i>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Comprar</a></li>
            <li><a href="#fale-conosco">Contato</a></li>
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
    </nav>

    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="recebe_login.php" method="post">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <button type="submit">Entrar</button>
            </form>
            <a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-links">
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Serviço</a>
            <a href="#">Suporte</a>
        </div>
        <p>&copy; 2024 Minotauro Esportes. Todos os direitos reservados.</p>
    </footer>
</body>