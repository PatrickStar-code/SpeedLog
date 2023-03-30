<div class="bg-gray-200 h-full">
    <?php include("componentes/content_home.php") ?>

</div>
<script>
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);
google.setOnLoadCallback(drawChart2)
google.charts.setOnLoadCallback(drawChart3);
google.charts.setOnLoadCallback(drawChart4);


function drawChart() {
    var options_chart = {
        title: 'Número de Pedidos por Mês',
        chartArea: {
            width: '80%'
        },
        hAxis: {
            title: 'Mês',
            minValue: 0
        },

        legend: {
            position: 'top'
        },
        height: 350
    };
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Mês');
    data.addColumn('number', 'Número de Pedidos');
    data.addRows([
        ["Jan", <?php echo $nmr_pedidos_m['Jan']["nmr_pedidos"] ?>],
        ["Fev", <?php echo $nmr_pedidos_m['Fev']["nmr_pedidos"] ?>],
        ["Mar", <?php echo $nmr_pedidos_m['Mar']["nmr_pedidos"] ?>],
        ["Abr", <?php echo $nmr_pedidos_m['Abr']["nmr_pedidos"] ?>],
        ["Mai", <?php echo $nmr_pedidos_m['Mai']["nmr_pedidos"] ?>],
        ["Jun", <?php echo $nmr_pedidos_m['Jun']["nmr_pedidos"] ?>],
        ["Jul", <?php echo $nmr_pedidos_m['Jul']["nmr_pedidos"] ?>],
        ["Ago", <?php echo $nmr_pedidos_m['Ago']["nmr_pedidos"] ?>],
        ["Set", <?php echo $nmr_pedidos_m['Set']["nmr_pedidos"] ?>],
        ["Out", <?php echo $nmr_pedidos_m['Out']["nmr_pedidos"] ?>],
        ["Nov", <?php echo $nmr_pedidos_m['Nov']["nmr_pedidos"] ?>],
        ["Dez", <?php echo $nmr_pedidos_m['Dez']["nmr_pedidos"] ?>]
    ]);

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
    chart.draw(data, options_chart);
}

function drawChart2() {
    var data = google.visualization.arrayToDataTable([
        ['Mês', 'Receita R$'],
        ['Jan',
            <?php if ($nmr_receita_m['Jan']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Jan']["30%"];
                } ?>
        ],
        ['Fev',
            <?php if ($nmr_receita_m['Fev']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Fev']["30%"];
                } ?>
        ],
        ['Mar',
            <?php if ($nmr_receita_m['Mar']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Mar']["30%"];
                } ?>
        ],
        ['Abr',
            <?php if ($nmr_receita_m['Abr']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Abr']["30%"];
                } ?>
        ],
        ['Mai',
            <?php if ($nmr_receita_m['Mai']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Mai']["30%"];
                } ?>
        ],
        ['Jun',
            <?php if ($nmr_receita_m['Jun']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Jun']["30%"];
                } ?>
        ],
        ['Jul',
            <?php if ($nmr_receita_m['Jul']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Jul']["30%"];
                } ?>
        ],
        ['Ago',
            <?php if ($nmr_receita_m['Ago']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Ago']["30%"];
                } ?>
        ],
        ['Set',
            <?php if ($nmr_receita_m['Set']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Set']["30%"];
                } ?>
        ],
        ['Out',
            <?php if ($nmr_receita_m['Out']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Out']["30%"];
                } ?>
        ],
        ['Nov',
            <?php if ($nmr_receita_m['Nov']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Nov']["30%"];
                } ?>
        ],
        ['Dez',
            <?php if ($nmr_receita_m['Dez']["30%"] == null) {
                    echo 0;
                } else {
                    echo $nmr_receita_m['Dez']["30%"];
                } ?>
        ]
    ]);

    var options_chart = {
        title: 'Receita Mensal (R$)',
        curveType: 'function',
        legend: {
            position: 'bottom'
        },
        chartArea: {
            width: '80%'
        },
        height: 350

    };
    var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
    chart.draw(data, options_chart);
}

function drawChart3() {
    var data = google.visualization.arrayToDataTable([
        ['Status do Pedido', 'Número de Pedidos'],
        ['Pedido Pendente', <?php echo $pedidos['Pendente']["total"]?>],
        ['Motoboy Alocado', <?php echo $pedidos['Em Processo']["total"]?>],
        ['Pedido Em Transporte', <?php echo $pedidos['Em Transporte']["total"] ?>],
        ['Pedido Entregue', <?php echo $pedidos['Entregue']["total"]?>]
    ]);


    var options = {
        title: 'Status dos Pedidos',
        pieSliceText: 'value',
        slices: {
            0: {
                color: '#DC3912'
            },
            1: {
                color: '#3366CC'
            },
            2: {
                color: '#FF9900'
            },
            3: {
                color: '#109618'
            }
        },
        legend: {
            position: 'bottom'
        },
        pieHole: 0.6,
        height: 350

    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);

}

function drawChart4() {
    var data = google.visualization.arrayToDataTable([
        ['Mês', 'Clientes', 'Motoboys'],
        ['Jan', <?php echo $registros["Cliente"]["Jan"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Jan"]["motoboy"] ?>],
        ['Fev', <?php echo $registros["Cliente"]["Fev"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Fev"]["motoboy"] ?>],
        ['Mar', <?php echo $registros["Cliente"]["Mar"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Mar"]["motoboy"] ?>],
        ['Abr', <?php echo $registros["Cliente"]["Abr"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Abr"]["motoboy"] ?>],
        ['Mai', <?php echo $registros["Cliente"]["Mai"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Mai"]["motoboy"] ?>],
        ['Jun', <?php echo $registros["Cliente"]["Jun"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Jun"]["motoboy"] ?>],
        ['Jul', <?php echo $registros["Cliente"]["Jul"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Jul"]["motoboy"] ?>],
        ['Ago', <?php echo $registros["Cliente"]["Ago"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Ago"]["motoboy"] ?>],
        ['Set',<?php echo $registros["Cliente"]["Set"]["usuario"] ?> , <?php echo $registros["Motoboy"]["Set"]["motoboy"] ?>],
        ['Out', <?php echo $registros["Cliente"]["Out"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Out"]["motoboy"] ?>],
        ['Nov', <?php echo $registros["Cliente"]["Nov"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Nov"]["motoboy"] ?>],
        ['Dez', <?php echo $registros["Cliente"]["Dez"]["usuario"] ?>, <?php echo $registros["Motoboy"]["Dez"]["motoboy"] ?>]
    ]);

    // Define as opções de personalização do gráfico
    var options_chart = {
        title: 'Cadastro de Clientes e Motoboys por Mês',
        hAxis: {
            title: 'Mês'
        },
        vAxis: {
            title: 'Quantidade'
        },
        series: {
            0: {
                color: '#3366CC'
            },
            1: {
                color: '#DC3912'
            }
        },
        legend: {
            position: 'top'
        },
        height: 350

    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div4'));
    chart.draw(data, options_chart);
}



$(window).resize(function() {
    drawChart();
    drawChart2();
    drawChart3();
    drawChart4();
});

$(document).ready(function() {
    $("#loader_gr").hide();
    $("#conteudo").removeClass("hidden");
});
</script>