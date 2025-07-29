<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/profile.css">

        <title>Great Movie - Профиль</title>
    </head>
    <body>
        <header>
            <?php include 'templates/header.php' ?>
        </header>

        <main>
            <div class="profile-header">
                <img class="avatar" src="files/users/0/avatar.jpg">
                <h1 clsas="username">John Doe</h1>
            </div>
            <hr>
            <div class="profile-info">
                <p><span>ID: </span> 0</p> 
                <p><span>Роль:</span> разработчик</p> 
            </div>
            <hr>
            <div class="profile-footer">
                <button class="main-button">Настройки профиля</button>
                <button class="main-button">Выйти из аккаунта</button>
            </div>
            <hr> 
        </main>

        <footer>
            <?php include 'templates/footer.php' ?>
        </footer>
    </body>
</html>
