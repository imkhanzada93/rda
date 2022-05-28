@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 288px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $insurance_type_count }}</h3>
                            <p>Insurance Types</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('insurance-types.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $insurance_count }}</h3>
                            <p>Insurance</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('insurance-types.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $plan_count }}</h3>
                            <p>Plan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('plans.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $account_count }}</h3>
                            <p>Account</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('accounts.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Account By Insurance Type</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="account_by_insurance_type" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Account By Insurance</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="account_by_insurance" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Account By Plan</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="account_by_plans" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- BAR CHART -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Account (Last 30 Days Records)</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="account" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script>
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#account_by_insurance_type').get(0).getContext('2d')
    var donutData        = {
        labels: {!! json_encode($insurance_types) !!},
        datasets: [
            {
                data: {!! json_encode($account_by_insurance_types) !!},
                backgroundColor : {!! json_encode($insurance_types_color) !!},
            }
        ]
    }
    var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#account_by_insurance').get(0).getContext('2d')
    var donutData        = {
        labels: {!! json_encode($insurances) !!},
        datasets: [
            {
                data: {!! json_encode($account_by_insurances) !!},
                backgroundColor : {!! json_encode($insurances_color) !!},
            }
        ]
    }
    var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#account_by_plans').get(0).getContext('2d')
    var donutData        = {
        labels: {!! json_encode($plans) !!},
        datasets: [
            {
                data: {!! json_encode($account_by_plans) !!},
                backgroundColor : {!! json_encode($plans_color) !!},
            }
        ]
    }
    var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var areaChartData = {
        labels  : {!! json_encode($account_date) !!},
        datasets: [
            {
            label               : '',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : {!! json_encode($account_data) !!}
            }
        ]
    }
    var barChartCanvas = $('#account').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp0

    var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false,
        legend: {
            display: false
        },
    }

    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })
</script>
@endsection