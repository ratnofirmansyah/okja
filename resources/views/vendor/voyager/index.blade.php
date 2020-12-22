@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('{{ voyager_asset('images/widget-backgrounds/01.jpg') }}');">
            <div class="dimmer"></div>
            <div class="panel-content">
                <i class='voyager-group'></i>
                @php
                    $totalUser = \App\Models\User::count();
                    $product = \App\Models\Product::count();
                @endphp
                <h4>Active Product : {{number_format($product)}} products has recorded in okja.</h4>
                <p>{{number_format($totalUser)}} users already using Okja.</p>
            </div>
        </div>
    </div>
@stop

@section('javascript')


@stop
