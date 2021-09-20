@extends('layouts.app_admin')
@section('title', '管理者｜ダッシュボード')
@section('header')
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
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
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/admin/laravel') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
@endsection
@section('content')
<div class="container">
    <form action="{{ asset('/admin/home/all_user') }}" method="post" class="mb-3 d-inline-block">
    @csrf
        <input type="submit" class="btn btn-primary" value="全ユーザーを見る">
    </form>
    <form action="{{ asset('/admin/home') }}" method="post" class="mb-3 d-inline-block ml-3">
    @csrf    
        <input type="submit" class="btn btn-primary" value="社内ユーザーだけ見る">
    </form>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">名前</th>
                    <th scope="col">属性</th>
                    <th scope="col">HTML&CSS</th>
                    <th scope="col">JavaScript</th>
                    <th scope="col">jQuery</th>
                    <th scope="col">PHP</th>
                    <th scope="col">Laravel</th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    @if($item->copo_id == 101)
                        <td>社内ユーザー</td>
                    @else
                        <td>社外ユーザー</td>
                    @endif
                    <td>{{ $item->css }}%</td>
                    <td>{{ $item->js }}%</td>
                    <td>{{ $item->jquery * 10 }}%</td>
                    <td>{{ $item->php }}%</td>
                    <td>{{ $item->laravel * 10 }}%</td>
                    <td>
                        <form action="{{ asset('/admin/del_user') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="submit" id="del_btn" class="btn btn-danger" value="削除する">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection