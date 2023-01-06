$(document).on("click", "#btn-send", function () {

    let inputEmail = $("#email-input").val();
    let inputName = $("#name-input").val();
    let inputPass = $("#pass-input").val();
    let inputGender = $("#gen-input").val();
    let inputErrorEmail = $("#error-message-for-input-email");
    let inputErrorName = $("#error-message-for-input-name");
    let inputErrorPassword = $("#error-message-for-input-password");
    let errorDiv = $("#error-div");

    //обнуляем текст предупреждений
    inputErrorName.text("");
    inputErrorEmail.text("");

    $.post("app/register.php", {email: inputEmail, name: inputName, password: inputPass, gender:inputGender }, function (data) {
        if (data !== 0) {

            if (data.value === "register complete") {
                //inputErrorEmail.text("Регистрация завершена!");
                $("#message").text("Регистрация завершена. Начинайте игру");
                $("#message").css("text-align", "center");
                $("#form").css("display", "none");
                $("#btn-send").css("display", "none");
                $("#start").css("display", "block");
            }
            if(data.username === "this name already exists") {
                inputErrorName.text("Такой ник пользователя уже существует");
            }
            if(data.email === "this email already exists") {
                inputErrorEmail.text("Такой email уже существует");
            }
        } else {
            inputErrorEmail.text("Ошибка!"); //email else
        }
    }, "json");
});