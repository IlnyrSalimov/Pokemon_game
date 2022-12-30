
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
    let form = document.getElementById('form');
    let btnSend = document.getElementById('btn-send');
    let icon;

    //Второе сообщение
    button.addEventListener('click', function () {
    document.getElementById('message').textContent = '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectusdolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
    button.style.display = "none";
    button2.style.display = "block";
});
    //Третье сообщение
    button2.addEventListener('click', function () {
    document.getElementById('message').textContent = '3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectus dolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
    button2.style.display = "none";
    button3.style.display = "block";
});
    //Четвертое сообщение
    button3.addEventListener('click', function () {
    document.getElementById('message').textContent = '4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci commodi consectetur cum, delectus dolore expedita fuga, ipsam reprehenderit rerum temporibus veniam?';
    button3.style.display = "none";
    buttonCreatePerson.style.display = "block";
});

    //Выбор пола
    buttonCreatePerson.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Выберите пол:';
    buttonCreatePerson.style.display = "none";
    buttonBoy.style.display = "block";
    buttonGirl.style.display = "block";
    buttonField.style.display = "flex";
    buttonField.style.columnGap = "100px";
});

    //Выбор Мальчика
    buttonBoy.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Выберите аватар:';
    document.getElementById('gen-input').value = 'boy';
    buttonBoy.style.display = "none";
    buttonGirl.style.display = "none";
    console.log(boyAvatar);
    let gender = 'boy';
    buttonSectionBoy.style.display = "block";
    boyAvatar.style.display = "flex";
});

    //Выбор девочки
    buttonGirl.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Выберите аватар:';
    document.getElementById('gen-input').value = 'girl';
    buttonBoy.style.display = "none";
    buttonGirl.style.display = "none";
    let gender = 'girl';
    buttonSectionGirl.style.display = "block";
    girlAvatar.style.display = "flex";
});

    //Выбор аватара 1
    buttonBoyIcon1.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionBoy.style.display = "none";
    boyAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 1;
});

    //Выбор аватара 2
    buttonBoyIcon2.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionBoy.style.display = "none";
    boyAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 2;
});

    //Выбор аватара 3
    buttonBoyIcon3.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionBoy.style.display = "none";
    boyAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 3;
});

    //Выбор аватара 4
    buttonGirlIcon1.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionGirl.style.display = "none";
    girlAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 4;
});

    //Выбор аватара 5
    buttonGirlIcon2.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionGirl.style.display = "none";
    girlAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 5;
});

    //Выбор аватара 6
    buttonGirlIcon3.addEventListener('click', function () {
    document.getElementById('message').textContent = 'Введите данные';
    buttonSectionGirl.style.display = "none";
    girlAvatar.style.display = "none";
    form.style.display = "block";
    btnSend.style.display = "block";
    icon = 6;
});