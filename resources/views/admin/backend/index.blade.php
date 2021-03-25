@extends('admin.backend.layouts.master')

@section('title','Home')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0px 3px 6px #00000029;border-radius: 10px;">
                <div class="card-body d-flex justify-content-center align-items-center">
                    @php
                    $data = [];
                    foreach ($quizzes as $key => $quiz) {
                    $arr = [
                    'name' => $quiz->title,
                    'y' => count($quiz->attempts),
                    ];
                    if($key==0){
                    $arr = $arr+[
                    'sliced'=> true,
                    'selected'=> true
                    ];
                    }
                    array_push($data,$arr);
                    }
                    @endphp
                    <figure class="">
                        <div id="chart-quiz"></div>
                    </figure>
                    <script>
                        Highcharts.chart('chart-quiz', {
              chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
              },

            legend: {
                align: 'left',
                verticalAlign: 'top',
                layout: 'vertical',
                x: 0,
                y: 100
            },
              title: {
                text: ''
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
                    enabled: false
                  },
                  showInLegend: true
                }
              },
              series: [{
                name: '',
                colorByPoint: true,
                data: JSON.parse('{{json_encode($data)}}'.replace(/&quot;/g,'"'))
              }]
            });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
