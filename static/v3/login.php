<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/login.css">
        <title>Great Movie - Войти</title>
    </head>
    <body>
        <header>
            <?php include 'templates/header.php'?>
        </header>
        <main>
            <div class="auth-field">
                <div class="auth-header">
                    <h1>Войти в аккаунт</h1> 
                </div>
                <div class="auth-main">
                    <form id="loginForm"> 
                        <div class="login-field"> 
                            <p>Email или логин</p>
                            <div class="input">
                                <input name="username" class="input-field" type="text">
                            </div> 
                        </div>
                        <div class="login-field">
                            <p>Пароль</p>
                            <div class="input"> 
                                <input name="password" class="input-field" type="password">
                            </div>
                        </div>
                        <button type="submit" class="main-button">Войти</button>
                        <div class="login-semi-field">
                            <a href="/register" class="transparent-button">Зарегистрироваться</a>
                            <a href="/reset_password" class="transparent-button">Восстановить пароль</a> 
                        </div>
                        <div id="error-message"></div>
                    </form>
                </div>
            </div>
        </main>
        <hr>
        <footer>
            <?php include 'templates/footer.php'?>
        </footer>

        <script src="js/login.js"></script>
    </body>
</html>
