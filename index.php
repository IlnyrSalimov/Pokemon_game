<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/style/normalize.css">
    <title>Document</title>
</head>
<body>
<main style="display: flex;
      align-items: center;
      flex-direction: column">
    <div style="margin: 0 auto;">
        <img src="./public/img/pprofessor.png" alt="Professor" style="width: 200px; height: auto;">
    </div>
    <div class="message" style="margin-top: 20px; margin-bottom: 40px; font-size: 18px; width: 500px; height: 200px; background-color: beige; padding: 10px 15px">
        <p id="message">Lorem ipsum dolor sit amet,</p>
        <div  id="form" style="display: none">
            <form style="display: flex; flex-direction:column; row-gap: 10px;">
                <label><input id="email-input" type="email" name="email" placeholder="email"></label>
                <label><input id="name-input" type="text" name="name" placeholder="name"></label>
                <label><input id="pass-input" type="password" name="password" placeholder="password"></label>
                <input id="gen-input" type="text" name="gender" placeholder="gender" value="" style="display:none;">
            </form>

            <div id="error-div">
                <p id="error-message-for-input-email" style="color:red;"></p>
                <p id="error-message-for-input-name" style="color:red;"></p>
                <p id="error-message-for-input-password" style="color:red;"></p>
            </div>
        </div>
        <a href="./public/game.php"><input type="button" id="start" style="display:none; margin: 0 auto;" value="Начать игру!"></a>

        <div id="Boy" style="display:none; justify-content: center; column-gap: 50px;">
            <img src="./public/img/boy1.jpg" alt="boy1" style="width: 80px; height: auto;">
            <img src="./public/img/boy2.jpg" alt="boy2" style="width: 80px; height: auto;">
            <img src="./public/img/boy3.jpg" alt="boy3" style="width: 80px; height: auto;">
        </div>
        <div id="Girl" style="display:none; justify-content: center; column-gap: 50px;">
            <img src="./public/img/girl1png.png" alt="girl1" style="width: 80px; height: auto;">
            <img src="./public/img/girl2.png" alt="girl2" style="width: 80px; height: auto;">
            <img src="./public/img/girl3.png" alt="girl3" style="width: 80px; height: auto;">
        </div>

    </div>

    <div id="button-field">
        <button id="btn" style="font-size: 24px">OK</button>
        <button id="btn-2" style="font-size: 24px; display: none;">OK</button>
        <button id="btn-3" style="font-size: 24px; display: none;">OK</button>
        <button id="btn-Boy" style="font-size: 24px; display: none;">Мальчик</button>
        <button id="btn-Girl" style="font-size: 24px; display: none;">Девочка</button>
        <button id="btn-CreatePerson" style="font-size: 24px; display: none;">Создать персонажа</button>

        <!--кнопки выбора пола-->
        <div id="section-btn-boy" style="display: none">
            <button id="btn-Boy_icon1" style="font-size: 24px;">1</button>
            <button id="btn-Boy_icon2" style="font-size: 24px;">2</button>
            <button id="btn-Boy_icon3" style="font-size: 24px;">3</button>
        </div>
        <div id="section-btn-girl" style="display: none">
            <button id="btn-Girl_icon1" style="font-size: 24px;">1</button>
            <button id="btn-Girl_icon2" style="font-size: 24px;">2</button>
            <button id="btn-Girl_icon3" style="font-size: 24px;">3</button>
        </div>
        <!--кнопки выбора пола-->

        <button id="btn-send" type="submit" style="display: none">Отправить</button>

    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="public/script/jqueryScript.js"></script>
<script src="public/script/script.js"></script>
</body>
</html>