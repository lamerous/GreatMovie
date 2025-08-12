<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/promo.css">
        <title>GreatMovie - Лучшие фильмы</title>
    </head>
    <body>
        <?php include 'templates/header.php' ?>

        <main class="main">
            <div class="main__inline">
                <div class="promo-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/arabistan.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/reward_hunters.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/arabistan.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/reward_hunters.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/arabistan.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/reward_hunters.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/arabistan.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="promo-slider__image" src="files/promo/reward_hunters.png">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </main>

        <?php include 'templates/footer.php' ?>
        <?php include 'templates/tabbar.php' ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>