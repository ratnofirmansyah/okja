@extends('voyager::master')

@section('css')
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" >
@stop

@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-bar-chart"></i> Daily Transaction
        </h1>
    </div>
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form>
                                <!-- CSRF TOKEN -->
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control daterange" name="daterange" value="{{$daterangeori}}" />
                                </div>
                                <div class="form-group">
                                    <label>Outlet</label>
                                    <select class="form-control select2" data-placeholder="Outlet" name="outlet_id">
                                        <option></option>
                                        <option value="all" @if($outlet_id=='all') selected @endif>All</option>
                                        @foreach($outlets as $outlet)
                                            <option value="{{$outlet->id}}" @if($outlet_id!='all' && $outlet_id==$outlet->id) selected @endif>{{$outlet->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Transaction Type</label>
                                    <select class="form-control select2" data-placeholder="Transaction Type" name="type">
                                        <option></option>
                                        <option value="out" @if($type=='out') selected @endif>Transaction Out</option>
                                        <option value="in"  @if($type=='in') selected @endif>Transaction In</option>
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
                        <div class="col-md-12 chartreport">
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
        var baseurl = "{{url('')}}";
        $("form").submit(function(){
            event.preventDefault();
            $("canvas#myChart").remove();
            $("div.chartreport").append('<canvas id="myChart" class="animated fadeIn" style="max-height: 400px;"></canvas>');
            getReport();
        });
        function getReport() {
            var token = $('input[name="_token"]').val();
            var daterange = $('input[name="daterange"]').val();
            var outlet_id = $('select[name="outlet_id"]').val();
            var transaction_type = $('select[name="type"]').val();
            $.ajax({
                type: 'GET',
                url: baseurl+'/reports/daily-transactions-data?_token='+token+'&daterange='+daterange+'&outlet_id='+outlet_id+'&type='+transaction_type,
                success: function (result) {
                    var labels = result.labels;
                    var dataTransactions = result.transactions;
                    var dataSet = [];

                    for (var i=0; i<dataTransactions.length ; i++) {
                        const r = Math.round (Math.random () * 255);
                        const g = Math.round (Math.random () * 255);
                        const b = Math.round (Math.random () * 255);

                        var data = {
                            axis: 'y',
                            label: dataTransactions[i].label,
                            data: dataTransactions[i].data,
                            fill: false,
                            backgroundColor: [
                                `rgba(${r}, ${g}, ${b}, 0.5)`,
                                `rgba(${r}, ${g}, ${b}, 0.5)`
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
                },
                error: function (argument) {
                    alert('Something was wrong! Please contact administrator.');
                }
            });
        }

        $(document).ready(function () {
            getReport();
        });

        $('.daterange').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('.daterange').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
        });
        $('.daterange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
@stop