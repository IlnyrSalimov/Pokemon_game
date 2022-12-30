$(document).on("click", "#btn-send", function () {

    let inputEmail = $("#email-input").val();
    let inputName = $("#name-input").val();
    let inputPass = $("#pass-input").val();
    let inputGender = $("#gen-input").val();
    let inputErrorEmail = $("#error-message-for-input-email");
    let inputErrorName = $("#error-message-for-input-name");
    let inputErrorPassword = $("#error-message-for-input-password");

    $.post("app/register.php", {email: inputEmail, name: inputName, password: inputPass}, function (data) {
        if (data !== 0) {
            let jsonData = JSON.parse(data);
            if (jsonData === "Такие данные уже существуют") {
                console.log(jsonData);
            }
        } else {
            inputErrorEmail.text("Ничего не найдено!"); //email else
        }
    });
});