$(document).ready(function () {

    $(".num").bind("keyup blur focus", function (e) {
        e.preventDefault();
        var expre = /[^\d]/g;
        $(this).val($(this).val().replace(expre, ''));
    });

    $(".mostrarBotaoSalvar").click(function () {
        $("#salvar").slideDown();
    });

    $(".esconderBotaoSalvar").click(function () {
        $("#salvar").slideUp();
    });

    //Fechar o alert
    $('#showAlert').ready(function () {
        setTimeout(function () {
            $('#showAlert').hide('slow');
        }, 4000);
    });

    $('#busca_navegacao').autocomplete({
        source: "/navegacao/getNavegacao/termo/",
        minLength: 1,
        select: function (event, ui) {
            window.location.href = ui.item.url;
        }
    });

    //onchange empresa do sistema
    $('#nav_id_empresa').change(function () {
        var empresa = $('#nav_id_empresa').val();
        $('#nav_id_empresa').attr('disabled', 'disabled');
        $('#nav_id_empresa').find(":selected").text("ALTERANDO...");
        $.ajax({
            url: "/empresa/mudar_empresa/empresa/" + empresa,
            async: true,
            complete: function (event, XMLHttpRequest) {
                document.location.reload();
            }
        });
        /*$.ajax({
         url: "/empresa/mudar_empresa",
         type: "post",
         data: {
         "empresa": empresa
         },
         async: true,
         complete: function (event, XMLHttpRequest) {
         document.location.reload();
         }
         });*/
    });

});

function somenteFloat(obj) {
    var value = $(obj).val();
    value = value.replace(/\D/g, "");
    value = value.replace(/^(\d{1,})+(\d{2})$/, "$1,$2");
    $(obj).val(value);
}

function showMessage(errorText, time, type, redirect) {

    if (time == null) {
        time = 4000;
    }

    if (type == null) {
        type = 'error';
    }

    redirect = redirect || null;

    $().toastmessage('showToast', {
        text: errorText,
        sticky: false,
        stayTime: time,
        position: 'top-right',
        type: type,
        close: function () {
            if (redirect != null) {
                window.location = redirect;
            }
        }
    });
}

function valida_data(valor) {

    var date = valor;
    var ardt = new Array;
    var ExpReg = new RegExp("(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/[12][0-9]{3}");

    ardt = date.split("/");

    /*
     * ardt[0] = dia
     * ardt[1] = mês
     * ardt[2] = ano
     */

    var erro = false;

    if (date.search(ExpReg) === -1) {
        erro = true;
    } else if (((ardt[1] === '04') || (ardt[1] === '06') || (ardt[1] === '09') || (ardt[1] === '11')) && (ardt[0] > '30')) {
        erro = true;
    } else if (ardt[1] === '02') {
        if ((ardt[0] > '28') && ((ardt[2] % 4) !== 0)) {
            erro = true;
        }
        if ((ardt[0] > '29') && ((ardt[2] % 4) === 0)) {
            erro = true;
        }
    }

    if (erro) {
        return false;
    }

    return true;
}

function valida_cpf(cpf) {
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;

    if (cpf.length < 11) {
        return false;
    }

    for (i = 0; i < cpf.length - 1; i++) {
        if (cpf.charAt(i) != cpf.charAt(i + 1))
        {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        numeros = cpf.substring(0, 9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i--) {
            soma += numeros.charAt(10 - i) * i;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            return false;
        }
        numeros = cpf.substring(0, 10);
        soma = 0;
        for (i = 11; i > 1; i--) {
            soma += numeros.charAt(11 - i) * i;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function validateEmail(email) {
    er = /^[a-zA-Z0-9][a-zA-Z0-9\.\-_-a]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
    if (er.exec(email)) {
        return true;
    } else {
        return false;
    }
}

function valida_cnpj(cnpj) {

    var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
    digitos_iguais = 1;
    if (cnpj.length != 14)
        return false;
    for (i = 0; i < cnpj.length - 1; i++)
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    if (!digitos_iguais) {
        tamanho = cnpj.length - 2;
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            return false;
        }
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            return false;
        }

        return true;
    } else {
        return false;
    }
}

function somenteLetra(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(a-z )\s]/gi, ""));
    //onkeypress="return somenteLetra(this);" onkeyup="return somenteLetra(this);"
}

function semCaracterEspecial(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(a-z 0-9)\s]/gi, ""));
}

function somenteNumero(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(0-9.,)\s]/gi, ""));
}

function somenteNumeroAll(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(0-9)\s]/gi, ""));
}

function somenteNumeroSemVirgula(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(0-9\.)\s]/gi, ""));
}

function somenteNumeroSemPonto(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(0-9,)\s]/gi, ""));
}

function somenteNumeroTraco(e) {
    var text = $(e).val();
    $(e).val(text.replace(/[^(0-9-.,)\s]/gi, ""));
}

function replaceAll(string, token, newtoken) {
    while (string.indexOf(token) !== -1) {
        string = string.replace(token, newtoken);
    }
    return string;
}

function contaDiasIntervaloDatas(data1, data2) {

    //Valida o formato da data
    if (valida_data(data1) && valida_data(data2)) {

        //Numero de minlisegundos de um dia
        var um_dia = 1000 * 60 * 60 * 24;

        //Converte as dias datas para milisegundos
        var data1_ms = getUnixtimeFromPtDate(data1);
        var data2_ms = getUnixtimeFromPtDate(data2);

        //Calcula a diferença em milisegundos
        var diferenca_ms = Math.abs(data1_ms - data2_ms)

        //Converte de volta em dias e retorna
        return Math.round(diferenca_ms / um_dia);

    } else {
        return false;
    }
}

function converteDataPtEn(data) {
    //Explode a data num array
    dataArray = data.split("/");
    //Concatena de forma inversa numa string
    return dataArray[2] + "/" + dataArray[1] + "/" + dataArray[0];
}

function getUnixtimeFromPtDate(date) {
    //Cria um objeto de data com a data em português
    var unixtime = new Date(converteDataPtEn(date));
    //Transforma em um inteiro com o unixtime da data
    return unixtime.getTime();
}

function convertFlotToString(valor, prefix) {
    var inteiro = null, decimal = null, c = null, j = null;
    var aux = new Array();
    valor = "" + valor;
    c = valor.indexOf(".", 0);
    //encontrou o ponto na string
    if (c > 0) {
        //separa as partes em inteiro e decimal
        inteiro = valor.substring(0, c);
        decimal = valor.substring(c + 1, valor.length);
    } else {
        inteiro = valor;
    }

    //pega a parte inteiro de 3 em 3 partes
    for (j = inteiro.length, c = 0; j > 0; j -= 3, c++) {
        aux[c] = inteiro.substring(j - 3, j);
    }

    //percorre a string acrescentando os pontos
    inteiro = "";
    for (c = aux.length - 1; c >= 0; c--) {
        inteiro += aux[c] + '.';
    }

    //retirando o ultimo ponto e finalizando a parte inteiro
    inteiro = inteiro.substring(0, inteiro.length - 1);
    if (isNaN(decimal) || decimal === null) {
        decimal = "00";
    } else {
        decimal = "" + decimal;
        if (decimal.length === 1) {
            decimal = decimal + "0";
        }
    }
    if (prefix === undefined) {
        valor = "R$ " + inteiro + "," + decimal;
    } else {
        valor = inteiro + "," + decimal;
    }
    return valor;
}

function convertStringToFloat(valor) {
    valor = valor.replace('R$', '');
    valor = replaceAll(valor, '.', '');
    valor = valor.replace(',', '.');
    return parseFloat(valor);
}