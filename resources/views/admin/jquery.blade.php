@extends('layouts.app_admin')
@section('title', '管理者｜jQuery')
@section('header')
<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ asset('/admin/home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    言語メニュー
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/progress') }}" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-bolt"></i>
        <span>進捗確認</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/learning') }}" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-code"></i>
        <span>学び＆メモ</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/css') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-js"></i>
        <span>HTML&CSS</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/js') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-js"></i>
        <span>JavaScript</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link collapsed" href="{{ asset('/admin/jquery') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-jsfiddle"></i>
        <span>jQuery</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/php') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-php"></i>
        <span>PHP</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/laravel') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
@endsection
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="h3 mb-0 text-dark font-weight-bold">オリジナルサイトのJSをjQueryに書き換える</h3>
</div>
<div class="spe_area">
    <section class="tab-content">
        <section v-if="activeTab==='tabs-10' ">
            <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                <li>① JavaScriptで作ったサイトをjQueryに書き換える</li>
            </ul>
        </section>
    </section>
</div>
<!-- End of Content Wrapper -->
@endsection