@extends('layouts.app')
@section('title', 'ダッシュボード')
@section('header')
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ asset('/home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>ダッシュボード</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    言語メニュー
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/css_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-css3-alt"></i>
        <span>HTML&CSS</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/js_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-js"></i>
        <span>JavaScript</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/jquery_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-jsfiddle"></i>
        <span>jQuery</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/php_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-php"></i>
        <span>PHP</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/laravel_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/todo_list') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-list-ul"></i>
        <span>ToDoリスト</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/learning') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-code"></i>
        <span>学び＆メモ</span>
    </a>
</li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
@endsection
@section('content')
<?php
$jquery_percent = $percent_array['jquery'] * 10;
$laravel_percent = $percent_array['laravel'] * 10;
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">ダッシュボード</h1>
        <a href="https://github.com/yosuke0715/fm_education" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50 mr-2"></i>ファイルダウンロード</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                学び数
                                @if(!empty($percent_array['learning_time']))
                                ：最終更新日{{ $percent_array['learning_time'] }}
                                @endif
                            </div>
                            <div class="h5 mb-0 ml-3 font-weight-bold text-gray-800">{{ $learning_count }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-x font-weight-bold text-info text-uppercase mb-1">Total
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-3 ml-3">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $total_percent }}%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $total_percent }}%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                todoリスト数</div>
                            <div class="h5 ml-3 mb-0 font-weight-bold text-gray-800">{{ $todo_count }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-css3-alt mr-2"></i>HTML&CSS</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2 position-relative">
                        <canvas id="CSSPieChart"></canvas>
                        <input type="hidden" name="css_percent" id="css_percent" value="{{ $percent_array['css'] }}">
                        <p class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px;">{{ $percent_array['css'] }}%</p>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Progress
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-js mr-2"></i>JavaScript</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="jsPieChart"></canvas>
                        <input type="hidden" name="js_percent" id="js_percent" value="{{ $percent_array['js'] }}">
                        <p class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px;">{{ $percent_array['js'] }}%</p>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Progress
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-jsfiddle mr-2"></i>jQuery</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="jqueryPieChart"></canvas>
                        <input type="hidden" name="jquery_percent" id="jquery_percent" value="{{ $jquery_percent }}">
                        <p class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px;">{{ $jquery_percent }}%</p>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Progress
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-php mr-2"></i>PHP</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="phpPieChart"></canvas>
                        <input type="hidden" name="php_percent" id="php_percent" value="{{ $percent_array['php'] }}">
                        <p class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px;">{{ $percent_array['php'] }}%</p>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Progress
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fab fa-laravel mr-2"></i>Laravel</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="laravelPieChart"></canvas>
                        <input type="hidden" name="laravel_percent" id="laravel_percent" value="{{ $laravel_percent }}">
                        <p class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px;">{{ $laravel_percent }}%</p>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Progress
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection('content')