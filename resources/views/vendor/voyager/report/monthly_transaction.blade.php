@extends('voyager::master')

@section('css')
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" >
@stop

@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-bar-chart"></i> Monthly Transaction
        </h1>
    </div>
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form method="get">
                                <!-- CSRF TOKEN -->
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control daterange" name="daterange" value="{{$daterangeori}}" />
                                </div>
                                <div class="form-group">
                                    <label>Outlet</label>
                                    <select class="form-control select2" data-placeholder="Outlet">
                                        <option></option>
                                        @foreach($outlets as $outlet)
                                            <option value="{{$outlet->id}}">{{$outlet->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-small">SEARCH</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <canvas id="myChart" style="max-height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        var labels = @json($labels);
        console.log();
        var dataTransactions = @json($transactions);
        var dataSet = [];

        for (var i=0; i<dataTransactions.length ; i++) {
            // -- random collor --
                const r = Math.round (Math.random () * 255);
                const g = Math.round (Math.random () * 255);
                const b = Math.round (Math.random () * 255);

            var data = {
                axis: 'y',
                label: dataTransactions[i].label,
                data: dataTransactions[i].data,
                fill: false,
                backgroundColor: [
                    `rgba(${r}, ${g}, ${b}, 0.2)`,
                    `rgba(${r}, ${g}, ${b}, 0.2)`
                ],
                stack: 'Stack 0',
                borderWidth: 1
            };
            dataSet.push(data);
        }

        const ctx = $('#myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: dataSet
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

        $('.daterange').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('.daterange').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM') + ' - ' + picker.endDate.format('YYYY-MM'));
        });
        $('.daterange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
@stop