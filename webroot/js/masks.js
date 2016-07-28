if (undefined == standard) {
    var standard = new Object();
}

standard.mask = new function () {
    this.change = false;
    this.events = "click keypress keyup blur";
    this.run = function () {
        $("form", document).each(function () {
            var form = this;
            // Change
            $("input:text, input:checkbox, input:radio, select, textarea", form).each(function () {
                $(this).change(function () {
                    standard.mask.change = true;
                });
            });
            // Mask
            jQuery.each($(form).serializeArray(), function (key, data) {
                //standard-mask-string
                $(".standard-mask-string[name='" + data.name + "']", form).each(function () {
                    standard.mask.string(this);
                });
                //standard-mask-string-fox
                $(".standard-mask-string-fox[name='" + data.name + "']", form).each(function () {
                    standard.mask.stringFox(this);
                });
                //standard-mask-integer
                $(".standard-mask-integer[name='" + data.name + "']", form).each(function () {
                    standard.mask.integer(this);
                });
                $(".standard-mask-float[name='" + data.name + "']", form).each(function () {
                    $(this).css({
                        "text-align": "right"
                    });
                    standard.mask.float(this);
                });
                //standard-mask-numeric
                $(".standard-mask-numeric[name='" + data.name + "']", form).each(function () {
                    $(this).css({
                        "text-align": "left"
                    });
                    $(this).priceFormat({
                        prefix: false,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                        allowNegative: true
                    });
                });
                //standard-mask-numeric 3 casas
                $(".standard-mask-numeric3casas[name='" + data.name + "']", form).each(function () {
                    $(this).css({
                        "text-align": "right"
                    });
                    $(this).priceFormat({
                        prefix: false,
                        centsSeparator: ',',
                        thousandsSeparator: '.',
                        centsLimit: 3,
                        allowNegative: false
                    });
                });
                //standard-mask-numeric 2 casas
                $(".standard-mask-numeric2casas[name='" + data.name + "']", form).each(function () {
                    $(this).css({
                        "text-align": "right"
                    });
                    $(this).priceFormat({
                        prefix: false,
                        centsSeparator: '.',
                        thousandsSeparator: ',',
                        centsLimit: 2,
                        allowNegative: false
                    });
                });
                //standard-mask-formataReal
                $(".standard-mask-formataReal[name='" + data.name + "']", form).each(function () {
                    standard.mask.formataReal(this);
                });
                //standard-mask-code
                $(".standard-mask-code[name='" + data.name + "']", form).each(function () {
                    standard.mask.code(this);
                });
                //standard-mask-email
                $(".standard-mask-email[name='" + data.name + "']", form).each(function () {
                    standard.mask.email(this);
                });
                //standard-mask-phone
                $(".standard-mask-phone[name='" + data.name + "']", form).each(function () {
                    standard.mask.phone(this);
                });
                //standard-mask-path
                $(".standard-mask-path[name='" + data.name + "']", form).each(function () {
                    standard.mask.path(this);
                });
                //standard-mask-hour
                $(".standard-mask-hour[name='" + data.name + "']", form).each(function () {
                    standard.mask.hour(this);
                });
                //standard-mask-date
                $(".standard-mask-date[name='" + data.name + "']", form).each(function () {
                    standard.mask.date(this);
                    $(this).datepicker({
                        "defaultDate": null,
                        "changeMonth": true,
                        "numberOfMonths": 1,
                        "dateFormat": 'dd/mm/yy',
                        "onSelect": function (selectedDate) {
                            var minLimit = $(this).attr("data-date-minLimit");
                            if ((undefined != minLimit) && ("" != minLimit)) {
                                $("input[name='" + minLimit + "']").datepicker("option", "minDate", selectedDate);
                            }
                        }
                    });
                });
                //standard-mask-cep
                $(".standard-mask-cep[name='" + data.name + "']", form).each(function () {
                    standard.mask.cep(this);
                });
                //standard-mask-ie
                $(".standard-mask-ie[name='" + data.name + "']", form).each(function () {
                    //standard.mask.ie(this);
                });
                //standard-mask-cpf
                $(".standard-mask-cpf[name='" + data.name + "']", form).each(function () {
                    standard.mask.cpf(this);
                });
                //standard-mask-cnpj
                $(".standard-mask-cnpf[name='" + data.name + "']", form).each(function () {
                    standard.mask.cnpj(this);
                });
                //standard-mask-cnpj_cpf
                $(".standard-mask-cnpf-cpf[name='" + data.name + "']", form).each(function () {
                    standard.mask.cnpj_cpf(this);
                });
                $("[name='" + data.name + "']", form).trigger("blur");
            });
        });
    };
    this.string = function (e) {
    };
    this.stringFox = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val().replace(/[^(a-z 0-9)\s]/gi, "");
            $(this).val(value);
        });        
    };
    this.integer = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val().replace(/\D/g, "");
            $(this).val(value);
        });
    };
    this.float = function (e) {
        $(e).bind("keypress", function (event) {
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    };
    this.formataReal = function (e) {
        $(e).bind(standard.mask.events, function () {

            var value = $(this).val().replace(/\D/g, "");
            var places = !isNaN(places = Math.abs(places)) ? places : 2;
            var symbol = symbol = symbol !== undefined ? symbol : "";
            var thousand = thousand || ".";
            var decimal = decimal || ",";

            var negative = value < 0 ? "-" : "",
                    i = parseInt(value = Math.abs(+value || 0).toFixed(places), 10) + "",
                    j = (j = i.length) > 3 ? j % 3 : 0;
            value = symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(value - i).toFixed(places).slice(2) : "");
            console.log(value);
            $(this).val(value);
        });
    };
    this.code = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val().replace(/([^0-9\.-])/gi, "");
            value = value.toUpperCase();
            $(this).val(value);
        });
    };
    this.email = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val().replace(/([^A-Z0-9_\.\-\@])/gi, "");
            $(this).val(value);
        });
    };
    this.phone = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{2})+(\d{4,5})+(\d{4})$/, "($1) $2-$3");
            $(this).val(value);
        });
    };
    this.path = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val().replace(/([^A-Z0-9\/ ])/gi, "");
//            value = value.toLowerCase();
            $(this).val(value);
        });
    };
    this.hour = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{2})+(\d{2})+(\d{2})$/, "$1:$2:$3");
            $(this).val(value);
        });
    };
    this.date = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{2})+(\d{2})+(\d{4})$/, "$1/$2/$3");
            $(this).val(value);
        });
    };
    this.cep = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{5})+(\d{3})$/, "$1-$2");
            $(this).val(value);
        });
    };
    this.ie = function (e) {
    };
    this.cpf = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{3})+(\d{3})+(\d{3})+(\d{2})$/, "$1.$2.$3-$4");
            $(this).val(value);
        });
    };
    this.cnpj = function (e) {
        $(e).bind(standard.mask.events, function () {
            var value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{2})+(\d{3})+(\d{3})+(\d{4})+(\d{2})$/, "$1.$2.$3/$4-$5");
            $(this).val(value);
        });
    };
    this.cnpj_cpf = function (e) {
        var length = $(e).val().length;
        switch (length) {
            case 11:
                $(e).unbind(standard.mask.events);
                standard.mask.cpf(e);
                break;
            case 14:
                $(e).unbind(standard.mask.events);
                standard.mask.cnpj(e);
                break;
            default:
                $(e).bind(standard.mask.events, function () {
                    standard.mask.cnpj_cpf(e);
                });
                break;
        }
    };
};

$(document).ready(function () {
    standard.mask.run();
});