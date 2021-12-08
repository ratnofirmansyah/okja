@extends('voyager::master')

@section('css')
@stop

@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-sort"></i> Daily Transaction
        </h1>
    </div>
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form method="get">
                                <div class="col-md-10">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default btn-small">SEARCH</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <canvas id="myChart" style="max-height: 400px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var labels = @json($labels);
        const ctx = $('#myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                        axis: 'y',
                        label: 'Jogja',
                        data: [12, 9],
                        fill: false,
                        backgroundColor: [
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        stack: 'Stack 0',
                        borderWidth: 1
                    },
                    {
                        axis: 'y',
                        label: 'Klipang',
                        data: [3, 5],
                        fill: false,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)'
                        ],
                        stack: 'Stack 0',
                        borderWidth: 1
                    
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        stacked: true
                    },
                    x: {
                        stacked: true,
                    }
                }
            }
        });
    </script>
@stop