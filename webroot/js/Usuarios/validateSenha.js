function passwdValidate() {
    if (validaDadosSenha()) {
        changePasswd();
    }
}

function returnPassword(msg) {
    var msg2 = "<div class='alert alert-success' role='alert'>";
    var msg3 = ".</a> </div>";
    var html = msg2 + msg + msg3;
    $("#return").html(html);
}

function returnError(msg) {
    var msg2 = "<div class='alert alert-danger' role='alert'>";
    var msg3 = ".</a> </div>";
    var html = msg2 + msg + msg3;
    $("#return").html(html);
}

function clean() {
    $(".passwd").each(function () {
        $(this).val("");
    });
}

function changePasswd() {
    $.ajax({
        url: "/usuarios/changepassword/",
        type: "POST",
        dataType: "JSON",
        sync: false,
        data: {
            id: $("#id").val(),
            password: $("#password").val()
        },
        success: function (data) {
            console.log(data.return);
            if (data.return === 'true') {
                returnPassword("SENHA ALTERADA COM SUCESSO!");
                clean();
            } else {
                returnError("FALHA AO TROCAR A SENHA");
            }
        },
        error: function (data) {

        }
    });
}

function validaDadosSenha() {
    var auth = true;
    if ($("#password").val() === "") {
        //$().toastmessage('showErrorToast', "INSIRA A NOVA SENHA");
        returnError("INSIRA UMA NOVA SENHA");
        $("#password").focus();
        auth = false;
        return auth;
    }

    if ($("#passwordconfirm").val() === "") {
        //$().toastmessage('showErrorToast', "CONFIRME A SENHA");
        returnError("CONFIRME A SENHA");
        $("#passwordconfirm").focus();
        auth = false;
        return auth;
    }

    if ($("#password").val() !== $("#passwordconfirm").val()) {
        //$().toastmessage('showErrorToast', "SENHAS NÃO COINCIDEM");
        returnError("SENHAS NÃO COINCIDEM");
        $("#passwordconfirm").focus();
        auth = false;
        return auth;
    }

    return auth;
}