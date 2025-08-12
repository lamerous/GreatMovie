<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/movies.css">
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
                    <button class="transparent-button prev-button"><img src="img/navigate_prev.png"></button>
                    <div class="movie-carousel">
                        <img class="movie-poster" src="files/posters/bro.jpg">
                        <img class="movie-poster" src="files/posters/jaws.jpg">
                        <img class="movie-poster" src="files/posters/little-woman.jpg">
                        <img class="movie-poster" src="files/posters/starwars.jpg">
                        <img class="movie-poster" src="files/posters/127hours.jpg">
                        <img class="movie-poster" src="files/posters/bro.jpg">
                        <img class="movie-poster" src="files/posters/jaws.jpg">
                        <img class="movie-poster" src="files/posters/little-woman.jpg">
                        <img class="movie-poster" src="files/posters/starwars.jpg">
                        <img class="movie-poster" src="files/posters/127hours.jpg">
                        <img class="movie-poster" src="files/posters/bro.jpg">
                        <img class="movie-poster" src="files/posters/jaws.jpg">
                        <img class="movie-poster" src="files/posters/little-woman.jpg">
                        <img class="movie-poster" src="files/posters/starwars.jpg">
                        <img class="movie-poster" src="files/posters/127hours.jpg">
                        <img class="movie-poster" src="files/posters/bro.jpg">
                        <img class="movie-poster" src="files/posters/jaws.jpg">
                        <img class="movie-poster" src="files/posters/little-woman.jpg">
                        <img class="movie-poster" src="files/posters/starwars.jpg">
                        <img class="movie-poster" src="files/posters/127hours.jpg">
                        <img class="movie-poster" src="files/posters/bro.jpg">
                        <img class="movie-poster" src="files/posters/jaws.jpg">
                        <img class="movie-poster" src="files/posters/little-woman.jpg">
                        <img class="movie-poster" src="files/posters/starwars.jpg">
                    </div>
                    <button class="transparent-button next-button"><img src="img/navigate_next.svg"></button>
                </div>
            </div>
            <hr>
            <div class="movies">
                <div class="selection-title">
                    <h1>Новинки </h1>
                    <button class="transparent-button"><img class="right-arrow" src="img/right-arrow.svg"></button>
                </div>
                <div class="movie-list">
                    <button class="transparent-button prev-button"><img src="img/navigate_prev.png"></button>
                    <div class="movie-carousel" id="new-movies">
                        
                    </div>
                    <button class="transparent-button next-button"><img src="img/navigate_next.svg"></button>
                </div>
            </div>
            <hr>
            <div class="movies">
                <div class="selection-title">
                    <h1>Лучшие фильмы всех времен </h1>
                    <button class="transparent-button"><img class="right-arrow" src="img/right-arrow.svg"></button>
                </div>
                <div class="movie-list">
                    <!--
                    <img class="movie-poster" src="files/posters/127hours.jpg">
                    <img class="movie-poster" src="files/posters/bro.jpg">
                    <img class="movie-poster" src="files/posters/jaws.jpg">
                    <img class="movie-poster" src="files/posters/little-woman.jpg">
                    <img class="movie-poster" src="files/posters/starwars.jpg">
                    -->
                </div>
            </div>

            <hr>
        </main>

        <footer>
            <?php include 'templates/footer.php'?>
        </footer>

        <script src="js/load_movies.js"></script>
        <script src="js/carousel.js"></script>
    </body>
</html>42