@extends('layouts.app')
@section('title', 'ToDoリスト')
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
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ asset('/laravel_test') }}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
    </a>
</li>
<li class="nav-item active">
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
<form action="{{ asset('/add_todo') }}" method="post" class="row d-flex" name="todo_form" onsubmit="return toDoCheck()">
@csrf
    <div class="form-floating mb-3 col-9">
        <input type="text" class="form-control" id="floatingInput" placeholder="オリジナルサイトを作成する" name="content">
        <label for="floatingInput" class="ml-2">todoリストを入力する</label>
    </div>
    <div class="col-3 mt-3">
        <input class="btn btn-primary" type="submit" value="追加する">
    </div>
</form>
<div class="list_area">
    <h2>ToDoリスト</h2>
    @foreach ($items as $item)
    <div class="list_item rounded alert alert-success row py-4 mx-3" >
        <div class="col-9">
            <time>{{ $item->updated_at }}</time>
            <h3 class="text-break text-dark">{{ $item->content }}</h3>
        </div>
        <form action="{{ asset('/todo_edit') }}" method="post" class="col-1 mr-2 my-auto">
        @csrf
            <input type="hidden" name="edit_id" value="{{ $item->id }}">
            <input type="submit" value="編集する" class="btn btn-success rounded-pill py-2 px-3">
        </form>
        <form action="{{ asset('/todo_del') }}" method="post" class="col-1 my-auto">
        @csrf
            <input type="hidden" name="del_id" value="{{ $item->id }}">
            <input type="submit" value="削除する" id="del_btn" class="btn btn-danger rounded-pill py-2 px-3">
        </form>
    </div>
    @endforeach
    
</div>
<!-- End of Content Wrapper -->
@endsection