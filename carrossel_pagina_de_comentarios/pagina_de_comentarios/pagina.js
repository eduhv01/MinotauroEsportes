const form = document.getElementById('comment-form');
const commentsContainer = document.getElementById('comments-container');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const nome = form.nome.value.trim();
    const comentario = form.comentario.value.trim();

    if (nome && comentario) {
        const commentDiv = document.createElement('div');
        commentDiv.classList.add('comment');
        commentDiv.innerHTML = `<strong>${nome}:</strong> <p>${comentario}</p>`;
        commentsContainer.prepend(commentDiv);

        form.reset();
    } else {
        alert('Por favor, preencha todos os campos!');
    }
});
