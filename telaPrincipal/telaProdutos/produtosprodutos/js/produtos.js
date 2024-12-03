const navbar = document.querySelector('.navbar');

// Função para adicionar a classe 'scrolled' quando a página for rolada
function changeNavbarColorOnScroll() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', changeNavbarColorOnScroll);

// Exibe as sugestões quando o campo de pesquisa recebe foco
function showSuggestions() {
    document.getElementById('suggestions-list').style.display = 'block';
}

// Esconde as sugestões quando o campo de pesquisa perde o foco
function hideSuggestions(event) {
    const searchInput = document.getElementById('search-input');
    const suggestionsList = document.getElementById('suggestions-list');
    // Verifica se o clique foi fora do campo de pesquisa ou da lista de sugestões
    if (!searchInput.contains(event.target) && !suggestionsList.contains(event.target)) {
        suggestionsList.style.display = 'none';
    }
}

// Filtra as sugestões conforme o usuário digita
function filterSuggestions() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const suggestions = document.getElementById('suggestions-list').getElementsByTagName('li');
    
    // Se o campo de pesquisa estiver vazio, esconde a lista de sugestões
    if (input === '') {
        document.getElementById('suggestions-list').style.display = 'none';
        return;
    }

    let hasSuggestions = false;
    // Verifica cada item de sugestão e exibe apenas os que contêm o valor digitado
    for (let i = 0; i < suggestions.length; i++) {
        const suggestion = suggestions[i];
        const suggestionText = suggestion.textContent || suggestion.innerText;

        if (suggestionText.toLowerCase().includes(input)) {
            suggestion.style.display = 'block';
            hasSuggestions = true;
        } else {
            suggestion.style.display = 'none';
        }
    }

    // Se não houver sugestões, esconde a lista
    if (!hasSuggestions) {
        document.getElementById('suggestions-list').style.display = 'none';
    }
}

// Adiciona eventos ao campo de pesquisa
document.getElementById('search-input').addEventListener('focus', showSuggestions); // Ao focar no campo, mostra as sugestões
document.getElementById('search-input').addEventListener('blur', hideSuggestions);  // Ao sair do campo, esconde as sugestões
document.getElementById('search-input').addEventListener('input', filterSuggestions); // Filtra as sugestões conforme digitação

// Fecha as sugestões se o usuário clicar fora do campo de pesquisa
document.addEventListener('click', hideSuggestions);


let currentIndex = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    // Atualiza o índice da imagem
    currentIndex += direction;

    // Se o índice exceder o número total de slides, volta para o primeiro
    if (currentIndex < 0) {
        currentIndex = totalSlides - 1;
    } else if (currentIndex >= totalSlides) {
        currentIndex = 0;
    }

    // Mover a apresentação de slides
    const slideWidth = slides[0].clientWidth;
    document.querySelector('.slides').style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

function fetchProducts() {
    fetch('/MinotauroEsportes/telaPrincipal/telaProdutos/fetch_produtos.php')
        .then(response => response.json())
        .then(data => {
            if (data.status === "success" && data.products.length > 0) {
                console.log("Produtos carregados com sucesso:", data.products);
                // const initialProducts = data.products.slice(0, displayedProducts);
                displayProducts(data.products);

                // document.getElementById('load-more').addEventListener('click', () => {
                //     const nextProducts = data.products.slice(displayedProducts, displayedProducts + 14);
                //     displayProducts(nextProducts);
                //     displayedProducts += nextProducts.length;

                //     if (displayedProducts >= data.products.length) {
                //         document.getElementById('load-more').style.display = 'none';
                //     }
                // });
            } else {
                console.error("Erro ao buscar produtos:", error);
                document.getElementById('products-container').innerHTML = '<p>Nenhum produto disponível no momento.</p>';
            }
        })
        .catch(error => {
            console.error("Erro de requisição:", error);
            document.getElementById('products-container').innerHTML = '<p>Erro ao carregar produtos. Por favor, tente novamente mais tarde.</p>';
        });
        
}

// Inicializa a busca dos produtos
fetchProducts()

// Função para exibir os produtos
function displayProducts(products) {
    const container = document.getElementById('products-container');
    container.innerHTML = '';
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');
        
        productCard.innerHTML = `
            <img src="${product.imgSrc}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.price}</p>
        `;
        
        container.appendChild(productCard);
    });
}

