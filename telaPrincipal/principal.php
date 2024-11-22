<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minotauro Esportes</title>
    <link rel="stylesheet" href="assets/css/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
    <div class="logo">
        <a href="principal.php"><img src="assets/img/etc/logo.png" alt="Logo da Minotauro Esportes" class="logo-img" ></a>
    </div>
    <!-- Barra de pesquisa -->
    <div class="search-container">
        <input type="text" id="search-input" class="search-bar" placeholder="Encontre o suplemento ideal para você">
        <ul id="suggestions-list" class="suggestions-list" style="display: none;">
            <li>Whey</li>
            <li>Creatina</li>
            <li>Pre-treino</li>
            <li>Esteroides</li>
        </ul>
    </div>
    <ul class="nav-links">
    <i class="fa-solid fa-user-secret"></i>
        <li class="auth-link">
            <div class="auth-container">
                    <span class="register"><a href="telaLogin/cadastro.php">Cadastre-se </a></span>
                    <span class="login"><a href="telaLogin/login.php">ou faça seu login</a></span>
            </div>
        </li>
        <li><a href="telaProdutos/produtos.php">Comprar</a></li>
        <li><a href="#fale-conosco">Contato</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
    </nav>
    
    <!-- Frase destaque -->
    <section class="banner">
        <h1>Alimente sua força, <span>conquiste sua vitória.</span></h1>
        <img src="./assets/img/etc/cbumeramon1.png" alt="">
    </section>

    <!--Produtos-->
    <div class="main-content">
    <h2 class="products-title">Produtos em Destaque</h2>
    <div class="products">
        <div class="product-card">
            <img id="cocktail" src="assets/img/produtos/coqueteleirapreta.webp" alt="Produto 1">
            <h3>Coqueteleira SW</h3>
            <p>Prepare suas bebidas e shakes de maneira prática e eficiente com a Coqueteleira SW.</p>
            <button class="buy-btn">Comprar Agora</button>
        </div>
        <div class="product-card">
            <img src="assets/img/produtos/creatina.jpeg" alt="Produto 2" id="creatina">
            <h3>Creatina 300g</h3>
            <p>É um suplemento essencial para quem busca melhorar seu desempenho atlético e aumentar a performance durante treinos de alta intensidade.</p>
            <button class="buy-btn">Comprar Agora</button>
        </div>
        <div class="product-card">
            <img src="assets/img/produtos/trembolona.png" alt="Produto 3" id="trembolona">
            <h3>Trembolona</h3>
            <p>É um poderoso esteroide anabolizante para aqueles que buscam aumento de força, massa muscular e desempenho em treinos intensos.</p>
            <button class="buy-btn">Comprar Agora</button>
        </div>
        <div class="product-card">
            <img  src="assets/img/produtos/Durateston.jpeg" alt="Produto 4" id="durateston">
            <h3>Durateston</h3>
            <p>É um esteroide de testosterona que combina diferentes ésteres para garantir uma liberação gradual do hormônio, maximizando ganhos musculares e força.</p>
            <button class="buy-btn">Comprar Agora</button>
        </div>
    </div>
</div>

<section class="reviews">
    <h2>Avaliações dos Clientes</h2>
    <div class="review-cards">
        <div class="review-card">
            <img src="assets/img/card/foto1.jpg" alt="João" class="client-photo">
            <div class="review-content">
                <p>"Produto incrível, melhor compra que fiz!"</p>
                <span>- João, Atleta</span>
            </div>
        </div>
        <div class="review-card">
            <img src="assets/img/card/maria.jpeg" alt="Maria" class="client-photo">
            <div class="review-content">
                <p>"Ótima qualidade e entrega rápida!"</p>
                <span>- Maria, Personal Trainer</span>
            </div>
        </div>
        <div class="review-card">
            <img src="assets/img/card/maratonista.jpeg" alt="Carlos" class="client-photo">
            <div class="review-content">
                <p>"Recomendo a todos os atletas!"</p>
                <span>- Carlos, Maratonista</span>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="fale-conosco">
    <h2 id="speak">Fale Conosco</h2>
    <div class="background">
    <form class="contact-form">
        <input type="text" placeholder="Seu Nome" required>
        <input type="email" placeholder="Seu Email" required>
        <textarea placeholder="Sua Mensagem" required></textarea>
        <button type="submit">Enviar</button>
        <div class="icones">
        <i class="fa-brands fa-instagram" style="color: #df1507;"></i>
        <i class="fa-brands fa-whatsapp" style="color: #df1507;"></i>
        <i class="fa-brands fa-square-facebook" style="color: #df1507;"></i>
        </div>
    </div>
    </form>
</section>

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
