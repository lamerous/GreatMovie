<?php require_once 'includes/auth.php'; ?>

<div class="header-content">
    <a class="logo--header" href="/"><img src="img/logo.png"></a>
    <form>
        <div class="input">
            <button class="transparent-button"><img class="search-icon" src="img/search.svg"></button>
            <input class="input-field" type="search" placeholder="Поиск...">
        </div>
    </form>
    <?php if (isLoggedIn()): ?>
        <a href="/profile" class="main-button">Профиль</a>
    <?php else: ?>
        <a href="/login" class="main-button">Войти</a>
    <?php endif; ?>
</div>
