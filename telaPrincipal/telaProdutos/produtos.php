<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minotauro Esportes</title>
    <link rel="stylesheet" href="/MinotauroEsportes/telaPrincipal/telaProdutos/produtosprodutos/css/produtos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
    <div class="logo">
        <a href="/MinotauroEsportes/telaPrincipal/principal.php"><img src="/MinotauroEsportes/telaPrincipal/assets/img/etc/logo.png" alt="Logo da Minotauro Esportes" class="logo-img" ></a>
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
        <li><a href="/MinotauroEsportes/telaPrincipal/telaProdutos/produtos.php">Comprar</a></li>
        <li><a href="#fale-conosco">Contato</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
    </nav>

    <div class="carousel">
        <div class="slides">
            <div class="slide"><img src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:1920/format:webp/plain/https://cdn-retailhub.com/max-titanium/6761ec05-6ab5-48e6-b726-c0b1cadd0883.jpg" alt="Imagem 1"></div>
            <div class="slide"><img src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:1920/format:webp/plain/https://cdn-retailhub.com/max-titanium/4a8d929a-f8fb-4190-a435-98b32a6e0148.jpg" alt="Imagem 2"></div>
            <div class="slide"><img src="https://www.gsuplementos.com.br/upload/banner/dc5b9648b5c0feaa7ad74f8aa0fb6775.webp" alt="Imagem 3"></div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">❮</button>
        <button class="next" onclick="moveSlide(1)">❯</button>
    </div>

    <div class="allprodutos">
        <h1><b>Os Melhores Produtos do Brasil!</b></h1>
        <div id="products-container" class="products-container">
            <!-- Produtos serão carregados -->
        </div>
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

    <script src="/MinotauroEsportes/telaPrincipal/telaProdutos/produtosprodutos/js/produtos.js"></script>
</body>
</html>