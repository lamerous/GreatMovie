async function fetchMovies() {
    const container = document.getElementById('new-movies');
    container.innerHTML = '<div class="loading">Загрузка фильмов</div>'

    try {
        const response = await fetch('/api/v1/movies');

        if (!response.ok) {
            throw new Error('Error while loading data');
        }

        const movies = await response.json();

        container.innerHTML = '';

        movies.forEach(movie => {
            const movieElement = createMovieElement(movie);
            container.appendChild(movieElement);
        });

    } catch (error) {
        container.innerHTML = `<div class="loading">${error.message}</div>`;
        console.error(error);
    }
}

function createMovieElement(movie) {
    const movieCard = document.createElement('a');
    movieCard.className = 'movie-container';
    movieCard.href = `movies/${movie.id}`;

    movieCard.innerHTML = `
        <img class="movie-poster" src="${movie.poster}">
        <div class="movie-overlay"> 
            <div class="movie-actions">
                <a href="favorites" class="action-btn">★</a>
                <button class="action-btn">⌚</button>
                <button class="action-btn">✗</button>
            </div>
            <span class="movie-rating">${movie.rating}</span>
            <div class="movie-info">
                <p>${movie.year}, ${movie.country}</p>
                <p>${movie.main_genre}</p>
                <p>${movie.duration}</p>
            </div>
        </div>
    `

    return movieCard;
}

document.addEventListener('DOMContentLoaded', function () {
    fetchMovies(); 
});
