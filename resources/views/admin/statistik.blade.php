@extends('admin.layouts.app')

@section('title')
Statistik
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">

                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-12">                        
        <div class="card">
            <div class="card-body">

                <div id="container2" style="width: 700px; height: 400px; margin: 0 auto"></div>
             
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/vendor/highcharts/code/highcharts.js') }}"></script>
<script src="{{ asset('assets/js/vendor/highcharts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('assets/js/vendor/highcharts/code/modules/export-data.js') }}"></script>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Konseling'
    },
    subtitle: {
        text: 'Berdasarkan Topik / Kategori'
    },
    xAxis: {
        categories: [
            @foreach ($konseling_by_topik as $data)
                '{{ $data->nama_kategori }}', 
            @endforeach
        ],
        crosshair: true
    },
    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
        name: 'Jumlah Konseling',
        data: [
        @foreach ($konseling_by_topik as $data)
            {{ $data->total }}, 
        @endforeach
        ]

    }]
});

Highcharts.chart('container2', {
    chart: {
        type: 'column',
        width: 700
    },
    title: {
        text: 'Jumlah Konseling'
    },
    subtitle: {
        text: 'Berdasarkan Jenis Kelamin'
    },
    xAxis: {
        categories: [
            @foreach ($konseling_by_gender as $key => $value)
                '{{ $key }}', 
            @endforeach
        ],
        crosshair: true
    },
    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        },
        series: {
            pointWidth: 50
        }
    },
    series: [{
        name: 'Jumlah Konseling',
        data: [
        @foreach ($konseling_by_gender as $key => $value)
            {{ $value }}, 
        @endforeach
        ]

    }]
});
</script>






          
@endsection