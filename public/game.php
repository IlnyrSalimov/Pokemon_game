<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" href="./img/pokemon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="./img/pokemon.ico" rel="icon">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/game.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="./script/game.js"></script>
    <title>Document</title>
</head>
<body>
<main>
    <div class="map" width="768" height="640">
<!--<img src="./img/Cerulean_City.webp" alt="карта мира">-->
        <div id="canvas-div"><canvas id="canvas" width="768" height="640"></canvas></div>
        <div class="pokedex" id="pokedex">
            <h3>Ваши пойманные покемоны:</h3>
            <ul>
                <li>Бульбазавр</li>
                <li>Чариазард</li>
                <li>Бластойз</li>
                <li>Катерпи</li>
                <li>Видл</li>
                <li>Коффинг</li>
                <li>Мяут</li>
                <li>Арканайн</li>
            </ul>
        </div>
        <div class="inventory" id="inventory">
            <ul>
                <li>Спрей</li>
                <li>Покебол</li>
                <li>Грейтбол</li>
                <li>Будильник</li>
            </ul>
        </div>
    </div>
    <div class="nav-button">
        <button id="mute">Включить</button>
        <button id="mute">Покедекс</button>
        <button id="mute">Инвентарь</button>
        <button id="mute">Профиль</button>

    </div>
</main>
</body>
</html>