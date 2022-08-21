 <h1>Dashboard Admin</h1>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div id="container"></div>
<br>
<br>
<div id="datamasuk"></div>
<br>
<br>
<div id="piechart"></div>
<br>
<br>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Konten Approval'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [<?php
                        foreach($bulan as $row2){
                        echo "'".$row2->month."',";   
                        }
                    ?>],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah (Konten)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Konten</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Setuju',
        data: [<?php
                        foreach( $data_setuju as $row2){
                        echo $row2->total_setuju.",";   
                        }
                    ?>]

    }, {
        name: 'Tidak Setuju',
        data: [<?php
                        foreach( $data_tidaksetuju as $row2){
                        echo $row2->total_tidaksetuju.",";   
                        }
                    ?>]

    }]
});
</script>
<script>
    Highcharts.chart('datamasuk', {

title: {
    text: 'Data Konten Perbulan'
},

subtitle: {
    text: 'Source: thesolarfoundation.com'
},

yAxis: {
    title: {
        text: 'Number of Employees'
    }
},

xAxis: {
    categories: [<?php
                        foreach($bulan as $row2){
                        echo "'".$row2->month."',";   
                        }
                    ?>],
    crosshair: true
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
},

series: [{
    name: 'Data Konten',
    data: [<?php
                        foreach( $data_konten as $row2){
                        echo $row2->total_data.",";   
                        }
                    ?>]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
          
</script>
<script>
    Highcharts.chart('piechart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Konten Kategori'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [<?php
                        foreach( $data_grafikpie as $row2){
                        echo $row2->jumlah.",";   
                        }
                    ?>]
    }]
});
              
</script>