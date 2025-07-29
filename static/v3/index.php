<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Great Movie - Лучшие фильмы</title>
    </head>
    <body>

        <header>
            <?php include 'templates/header.php'; ?>
        </header>

        <main>
            <div class="movies">
                <div class="selection-title">
                    <h1>Ваша подборка </h1>
                    <button class="transparent-button"><img class="right-arrow" src="img/right-arrow.svg"></button>
                </div>
                <div class="movie-list">

                    <a href="/movie/1" class="movie-container">
                        <img class="movie-poster" src="files/posters/127hours.jpg">
                        <div class="movie-overlay"> 
                            <div class="movie-actions">
                                <button class="transpant-button">★</button>
                                <button class="action-btn">⌚</button>
                                <button class="action-btn">✗</button>
                            </div>
                            <span class="movie-rating">8.7</span> 
                        </div>
                    </a>

                    <img class="movie-poster" src="files/posters/bro.jpg">
                    <img class="movie-poster" src="files/posters/jaws.jpg">
                    <img class="movie-poster" src="files/posters/little-woman.jpg">
                    <img class="movie-poster" src="files/posters/starwars.jpg">
                </div>
            </div>
            <hr>
            <div class="movies">
                <div class="selection-title">
                    <h1>Новинки </h1>
                    <button class="transparent-button"><img class="right-arrow" src="img/right-arrow.svg"></button>
                </div>
                <div id='new-movies' class="movie-list">
                    <img class="movie-poster" src="files/posters/127hours.jpg">
                    <img class="movie-poster" src="files/posters/bro.jpg">
                    <img class="movie-poster" src="files/posters/jaws.jpg">
                    <img class="movie-poster" src="files/posters/little-woman.jpg">
                    <img class="movie-poster" src="files/posters/starwars.jpg">
                </div>
            </div>
            <hr>
            <div class="movies">
                <div class="selection-title">
                    <h1>Лучшие фильмы всех времен </h1>
                    <button class="transparent-button"><img class="right-arrow" src="img/right-arrow.svg"></button>
                </div>
                <div class="movie-list">
                    <img class="movie-poster" src="files/posters/127hours.jpg">
                    <img class="movie-poster" src="files/posters/bro.jpg">
                    <img class="movie-poster" src="files/posters/jaws.jpg">
                    <img class="movie-poster" src="files/posters/little-woman.jpg">
                    <img class="movie-poster" src="files/posters/starwars.jpg">
                </div>
            </div>

            <hr>
        </main>

        <footer>
            <?php include 'templates/footer.php'?>
        </footer>

        <script src="js/load_movies.js"></script>
    </body>
</html>
