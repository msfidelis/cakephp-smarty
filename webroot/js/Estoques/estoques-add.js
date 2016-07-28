$(document).ready(function () {

    $.datepicker.setDefaults({
        defaultDate: null,
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "dd/mm/yy"
    });

    //Campos com Datepicker
    $("#dt-movimentacao").datepicker();
    $("#dt-1").datepicker();
    $("#dt-2").datepicker();
});

function mimimi() {
    if (validaForm()) {
        return true;
    } else {
        return false;
    }
}

function validaForm() {
    var auth = true;
    if ($("#quantidade").val() === "") {
        auth = false;
        $().toastmessage('showErrorToast', "INSIRA UMA QUANTIDADE");
    }   
    return auth;
}