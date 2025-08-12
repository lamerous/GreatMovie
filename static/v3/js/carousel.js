document.addEventListener('moviesLoaded', () => {
    const movieLists = document.querySelectorAll(".movie-list");

    movieLists.forEach(movieList => {
        const carousel =  movieList.querySelector(".movie-carousel");
        const prevButton =  movieList.querySelector(".prev-button");
        const nextButton =  movieList.querySelector(".next-button");
        const posters = carousel.querySelectorAll(".movie-poster");

        const posterStyle = window.getComputedStyle(posters[0]);
        const posterWidth = posters[0].offsetWidth + 
                            parseInt(posterStyle.marginLeft) + 
                            parseInt(posterStyle.marginRight);

        const visibleCount = 7.5;
        let currentPosition = 0;
        const maxPosition = (posters.length - visibleCount) * posterWidth;
        
        const updateButtons = () => {
            prevButton.hidden = currentPosition <= 0;
            nextButton.hidden = currentPosition >= maxPosition;
        }

        nextButton.addEventListener('click', () => {
            currentPosition += posterWidth * visibleCount;
            carousel.scrollBy({
                left: posterWidth * visibleCount,
            });
            updateButtons();
        });

        prevButton.addEventListener('click', () => {
            currentPosition -= posterWidth * visibleCount;
            carousel.scrollBy({
                left: -(posterWidth * visibleCount),
            });
            updateButtons();
        });

        updateButtons();
    });
});