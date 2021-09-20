@extends('layouts.app')
@section('title', 'Laravel')
@section('header')
<!-- Nav Item - Dashboard -->
<li class="nav-item ">
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
<li class="nav-item active">
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
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="h3 mb-0 text-dark font-weight-bold">シンプルメモ帳をLaravelで作成する</h3>
    <form action="{{ asset('/laravel_test/1') }}" method="POST" id="form_progress">
        @csrf
        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status }}">
        <button type="button" onclick="submitData()" id="submit_data"
            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
            @if($btn_status == 0)
            <span>できた！</span>
            @elseif($btn_status == 10)
            <span>クリア済</span>
            @endif
        </button>
    </form>
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