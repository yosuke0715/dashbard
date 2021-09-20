@extends('layouts.app_admin')
@section('title', '学び＆メモ')
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
<li class="nav-item active">
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
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/laravel') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
@endsection
@section('content')
<!-- Page Heading -->
<div class="list_area">
    <h2 class="d-inline-block">学び＆メモ</h2>
    <form action="{{ asset('/admin/learning_user') }}" method="post" class="d-inline-block w-50 mb-2">
        @csrf
        <select class="w-75 ml-4 mb-2 d-inline-block form-select" name="select_user_name"
            aria-label="Default select example">
            <option selected>他のユーザーを見る</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->user_name }}｜
                @if($user->copo_id == 101)
                <td>社内ユーザー</td>
                @else
                <td>社外ユーザー</td>
                @endif
            </option>
            @endforeach
        </select>
        <input type="hidden" name="">
        <input type="submit" class="btn btn-primary mb-2 ml-1" value="確認する">
    </form>
    <form action="{{ asset('/admin/learning_all_user') }}" class="d-inline-block mb-2" method="post">
        @csrf
        <input type="submit" class="btn btn-success mb-2" value="全社内ユーザーを見る">
    </form>
    @foreach ($items as $item)
    <div class="list_item rounded alert alert-info row py-4 mx-3">
        <div class="col-9">
            <span class="mr-5">ユーザー名：{{ $item->user_name }}</span>
            <time>{{ $item->updated_at }}</time>
            <h3 class="text-break text-dark mt-3">{{ $item->content }}</h3>
        </div>
    </div>
    @endforeach
</div>
<!-- End of Content Wrapper -->
@endsection