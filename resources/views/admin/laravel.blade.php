@extends('layouts.app_admin')
@section('title', '管理者｜Laravel')
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
<li class="nav-item">
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
<li class="nav-item active">
    <a class="nav-link collapsed" href="{{ asset('/admin/laravel') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
@endsection
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="h3 mb-0 text-dark font-weight-bold">シンプルメモ帳をLaravelで作成する</h3>
</div>
<div class="spe_area">
    <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
        <li>① PHPで作ったメモ帳をLaravelで作る</li>
        <li>② 新機能を作ってみる</li>
        <li>例）並び替え機能や検索機能など</li>
        <li>③ 論理削除を用いる</li>
        <li class="mt-3">完成物例↓</li>
    </ul>
    <img src="{{ asset('/img/another/laravel.png')}}" alt="メモ帳" class="w-100">
</div>
<!-- End of Content Wrapper -->
@endsection