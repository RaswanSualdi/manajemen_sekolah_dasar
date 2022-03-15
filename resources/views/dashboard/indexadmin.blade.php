@extends('layouts.default')

@section('content')
< class="row m-t-25">
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    {{-- <i class="zmdi zmdi-account-o"></i> --}}
                </div>
                <div class="text">
                    <h2>10368</h2>
                    <span>Siswa</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    {{-- <i class="zmdi zmdi-account-o"></i> --}}
                </div>
                <div class="text">
                    <h2>10368</h2>
                    <span>Guru</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    {{-- <i class="zmdi zmdi-account-o"></i> --}}
                </div>
                <div class="text">
                    <h2>10368</h2>
                    <span>Mapel</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>

</div>

@endsection