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
