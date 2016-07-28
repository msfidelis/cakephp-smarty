google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Serviços', 'Hours per Day'],
        ['Depilação', 5],
        ['Manicure', 4],
        ['Depdicure', 2],
        ['Hidratação', 2],
        ['Limpeza de Pele', 7]
    ]);

    var options = {
        pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
}



google.charts.setOnLoadCallback(drawChartFaturamento);
function drawChartFaturamento() {
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Em aberto', 65],
        ['Finalizado', 35],
    ]);

    var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
    };

    var chart = new google.visualization.PieChart(document.getElementById('faturamento'));
    chart.draw(data, options);
}



google.charts.setOnLoadCallback(drawChartAgendamentos);
function drawChartAgendamentos() {
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Janeiro', 5.85],
        ['Fevereiro', 1.66],
        ['Março', 0.316],
        ['Abril', 0.0791],
        ['Maio', 0.2],
        ['Junho', 0.99],
        ['Julho', 1.5],
        ['Agosto', 0.65],
        ['Setembro', 0.69],
        ['Outubro', 0.99],
        ['Novembro', 2.5],
        ['Dezembro', 3]
    ]);

    var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
    };

    var chart = new google.visualization.PieChart(document.getElementById('agendamentos'));
    chart.draw(data, options);
}


google.charts.setOnLoadCallback(drawChartResumo);
function drawChartResumo() {
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2013', 1000, 400],
        ['2014', 1170, 460],
        ['2015', 660, 1120],
        ['2016', 1030, 540]
    ]);

    var options = {
        title: 'Company Performance',
        hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
        vAxis: {minValue: 0}
    };

    var chart = new google.visualization.AreaChart(document.getElementById('resumo'));
    chart.draw(data, options);
}