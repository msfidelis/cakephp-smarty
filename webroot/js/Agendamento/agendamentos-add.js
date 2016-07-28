$(document).ready(function () {

    $.datepicker.setDefaults({
        defaultDate: null,
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "dd/mm/yy"
    });

    //Campos com Datepicker
    $("#dt-agendamento").datepicker();
});


function validaForm() {
    var auth = true;
    if ($("#dt-agendamento").val() === "") {
        auth = false;
        $().toastmessage('showErrorToast', "INSIRA A DATA DO AGENDAMENTO");
    }
    if ($("#id-cliente").val() === "") {
        auth = false;
        $().toastmessage('showErrorToast', "INSIRA O CLIENTE");
    }
    if ($("#id-servico").val() === "") {
        auth = false;
        $().toastmessage('showErrorToast', "O SERVIÇO");
    }
    return auth;
}