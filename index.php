<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div>
            <label>
                <input style="display:none;" id="email-input" type="email" name="email">
                <input style="display:none;" id="email-input" type="email" name="email">
                <p id="error-message-for-input"></p>
            </label>
        </div>
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
        <button id="btn-send-email" type="button" style="display: none">Отправить email</button>
        <button id="btn-send-email" type="button" style="display: none">Отправить email</button>

    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on("click", "#btn-send-email", function () {

            let inputEmail = $("#email-input").val();
            let emailError = $("#error-message-for-input");

            $.post("app/register.php", {email: inputEmail}, function (data) {
                if (data != 0) {
                    let userEmail = JSON.parse(data);
                    emailError.text(userEmail);
                    console.log(userEmail);
                } else {
                    emailError.text("Ничего не найдено!");
                }
            });
        });
</script>
<script>

    let buttonField = document.getElementById('button-field');
    let button = document.getElementById('btn');
    let button2 = document.getElementById('btn-2');
    let button3 = document.getElementById('btn-3');
    let buttonBoy = document.getElementById('btn-Boy');
    let buttonGirl = document.getElementById('btn-Girl');
    let buttonCreatePerson = document.getElementById('btn-CreatePerson');
    let buttonSectionBoy = document.getElementById('section-btn-boy');
    let buttonSectionGirl = document.getElementById('section-btn-girl');
    let girlAvatar = document.getElementById('Girl');
    let boyAvatar = document.getElementById('Boy');
    let buttonBoyIcon1 = document.getElementById('btn-Boy_icon1');
    let buttonBoyIcon2 = document.getElementById('btn-Boy_icon2');
    let buttonBoyIcon3 = document.getElementById('btn-Boy_icon3');
    let buttonGirlIcon1 = document.getElementById('btn-Girl_icon1');
    let buttonGirlIcon2 = document.getElementById('btn-Girl_icon2');
    let buttonGirlIcon3 = document.getElementById('btn-Girl_icon3');
    let icon;
    let sendEmail = document.getElementById('btn-send-email');
    let emailInput = document.getElementById('email-input');

    button.addEventListener('click', function () {
        document.getElementById('message').textContent = '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectusdolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
        button.style.display = "none";
        button2.style.display = "block";
    });

    button2.addEventListener('click', function () {
        document.getElementById('message').textContent = '3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectus dolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
        button2.style.display = "none";
        button3.style.display = "block";
    });

    button3.addEventListener('click', function () {
        document.getElementById('message').textContent = '4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectus dolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
        button3.style.display = "none";
        buttonCreatePerson.style.display = "block";
    });

    buttonCreatePerson.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Выберите пол:';
        buttonCreatePerson.style.display = "none";
        buttonBoy.style.display = "block";
        buttonGirl.style.display = "block";
        buttonField.style.display = "flex";
        buttonField.style.columnGap = "100px";
    });

    buttonBoy.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Выберите аватар:';
        buttonBoy.style.display = "none";
        buttonGirl.style.display = "none";
        console.log(boyAvatar);
        let gender = 'boy';
        buttonSectionBoy.style.display = "block";
        boyAvatar.style.display = "flex";
    });

    buttonGirl.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Выберите аватар:';
        buttonBoy.style.display = "none";
        buttonGirl.style.display = "none";
        let gender = 'girl';
        buttonSectionGirl.style.display = "block";
        girlAvatar.style.display = "flex";
    });

    buttonBoyIcon1.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionBoy.style.display = "none";
        boyAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 1;
    });

    buttonBoyIcon2.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionBoy.style.display = "none";
        boyAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 2;
    });

    buttonBoyIcon3.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionBoy.style.display = "none";
        boyAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 3;
    });

    buttonGirlIcon1.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionGirl.style.display = "none";
        girlAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 4;
    });

    buttonGirlIcon2.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionGirl.style.display = "none";
        girlAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 5;
    });

    buttonGirlIcon3.addEventListener('click', function () {
        document.getElementById('message').textContent = 'Введите email';
        buttonSectionGirl.style.display = "none";
        girlAvatar.style.display = "none";
        sendEmail.style.display = "block";
        emailInput.style.display = "block";
        icon = 6;
    });

    sendEmail.addEventListener('click', function () {

    });
</script>
</body>
</html>