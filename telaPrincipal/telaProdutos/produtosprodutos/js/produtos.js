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

const allProducts = [
    { name: 'Produto 1', price: 'R$ 100,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 2', price: 'R$ 120,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 3', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 4', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 5', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 6', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 7', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 8', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 9', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 10', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 11', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 12', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 13', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 14', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 15', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 16', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 17', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 18', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 19', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 20', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 21', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 22', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 23', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 24', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 25', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 26', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 27', price: 'R$ 80,00', imgSrc: 'https://via.placeholder.com/200' },
    { name: 'Produto 28', price: 'R$ 150,00', imgSrc: 'https://via.placeholder.com/200' }
];

let displayedProducts = 16;

// Função para exibir os produtos
function displayProducts(products) {
    const container = document.getElementById('products-container');
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

// Função para carregar mais produtos
function loadMoreProducts() {
    if (displayedProducts < allProducts.length) {
        const nextProducts = allProducts.slice(displayedProducts, displayedProducts + 14);
        displayProducts(nextProducts);
        displayedProducts += nextProducts.length;

        if (displayedProducts >= allProducts.length) {
            document.getElementById('load-more').style.display = 'none';
        }
    }
}

displayProducts(allProducts.slice(0, 16));

productCard.querySelector('.buy-button').addEventListener('click', function() {
    alert('Produto adicionado ao carrinho!');
});

