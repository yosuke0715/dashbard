@extends('layouts.app_admin')
@section('title', '管理者｜進捗確認')
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

<li class="nav-item active">
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
    <h2 class="d-inline-block">{{ $item->user_name }}の進捗状態</h2>
    <form action="{{ asset('/admin/progress_user') }}" method="post" class="d-inline-block w-75 mb-2">
        @csrf
        <select class="w-25 ml-4 mb-2 d-inline-block form-select" name="select_user_name"
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
        <input type="submit" class="btn btn-primary mb-2 ml-3" value="確認する">
    </form>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">言語</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">進捗</th>
                    <th scope="col">達成時間</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>色を変える</td>
                    @if($item->css_1 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_1 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_1 == 10)
                    <td class="font-weight-bold">{{ $item->css_1_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>悪者を探そう</td>
                    @if($item->css_2 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_2 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_2 == 10)
                    <td class="font-weight-bold">{{ $item->css_2_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>横並びにする</td>
                    @if($item->css_3 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_3 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_3 == 10)
                    <td class="font-weight-bold">{{ $item->css_3_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>レイアウトを修正しよう</td>
                    @if($item->css_4 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_4 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_4 == 10)
                    <td class="font-weight-bold">{{ $item->css_4_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>positionを使いこなす</td>
                    @if($item->css_5 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_5 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_5 == 10)
                    <td class="font-weight-bold">{{ $item->css_5_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>2列以降の修正</td>
                    @if($item->css_6 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_6 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_6_at == 10)
                    <td class="font-weight-bold">{{ $item->css_6_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>レスポンシブ対応を行う</td>
                    @if($item->css_7 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_7 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_7 == 10)
                    <td class="font-weight-bold">{{ $item->css_7_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>擬似要素を使ってみる</td>
                    @if($item->css_8 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_8 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_8 == 10)
                    <td class="font-weight-bold">{{ $item->css_8_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>transformを操る</td>
                    @if($item->css_9 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_9 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_9 == 10)
                    <td class="font-weight-bold">{{ $item->css_9_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">HTML&CSS</th>
                    <td>CSS オリジナルサイト作成</td>
                    @if($item->css_10 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->css_10 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->css_10 == 10)
                    <td class="font-weight-bold">{{ $item->css_10_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>inputの値を取得</td>
                    @if($item->js_1 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_1 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_1 == 10)
                    <td class="font-weight-bold">{{ $item->js_1_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>入力された文字数を数える</td>
                    @if($item->js_2 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_2 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_2 == 10)
                    <td class="font-weight-bold">{{ $item->js_2_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>confirmを使ってみる</td>
                    @if($item->js_3 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_3 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_3 == 10)
                    <td class="font-weight-bold">{{ $item->js_3_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>radioボタンの内容を表示</td>
                    @if($item->js_4 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_4 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_4 == 10)
                    <td class="font-weight-bold">{{ $item->js_4_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>正規表現を扱う</td>
                    @if($item->js_5 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_5 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_5 == 10)
                    <td class="font-weight-bold">{{ $item->js_5_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>配列祭り</td>
                    @if($item->js_6 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_6 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_6 == 10)
                    <td class="font-weight-bold">{{ $item->js_6_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>ちょいむずfor文</td>
                    @if($item->js_7 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_7 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_7 == 10)
                    <td class="font-weight-bold">{{ $item->js_7_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>タブを作る</td>
                    @if($item->js_8 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_8 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_8 == 10)
                    <td class="font-weight-bold">{{ $item->js_8_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>カウントタイマー</td>
                    @if($item->js_9 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_9 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_9 == 10)
                    <td class="font-weight-bold">{{ $item->js_9_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">JavaScript</th>
                    <td>電卓作成</td>
                    @if($item->js_10 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->js_10 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->js_10 == 10)
                    <td class="font-weight-bold">{{ $item->js_10_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">jQuery</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">jQuery</th>
                    <td>オリジナルサイトのJSをjQueryに書き換える</td>
                    @if($item->jquery == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->jquery == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->jquery == 10)
                    <td class="font-weight-bold">{{ $item->jquery_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>inputからデータを受け取る</td>
                    @if($item->php_1 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_1 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_1 == 10)
                    <td class="font-weight-bold">{{ $item->php_1_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>電話番号からハイフンを取り除く</td>
                    @if($item->php_2 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_2 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_2 == 10)
                    <td class="font-weight-bold">{{ $item->php_2_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>if文練習</td>
                    @if($item->php_3 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_3 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_3 == 10)
                    <td class="font-weight-bold">{{ $item->php_3_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>配列の中身を表示させる</td>
                    @if($item->php_4 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_4 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_4 == 10)
                    <td class="font-weight-bold">{{ $item->php_4_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>aタグを使わないPHPのページ遷移</td>
                    @if($item->php_5 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_5 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_5 == 10)
                    <td class="font-weight-bold">{{ $item->php_5_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>DBへの接続</td>
                    @if($item->php_6 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_6 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_6 == 10)
                    <td class="font-weight-bold">{{ $item->php_6_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>配列の結合</td>
                    @if($item->php_7 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_7 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_7 == 10)
                    <td class="font-weight-bold">{{ $item->php_7_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>foreachを扱う</td>
                    @if($item->php_8 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_8 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_8 == 10)
                    <td class="font-weight-bold">{{ $item->php_8_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>オリジナルサイトのお問い合わせ機能を実装する</td>
                    @if($item->php_9 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_9 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_9 == 10)
                    <td class="font-weight-bold">{{ $item->php_9_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">PHP</th>
                    <td>シンプルメモ帳を作成</td>
                    @if($item->php_10 == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->php_10 == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->php_10 == 10)
                    <td class="font-weight-bold">{{ $item->php_10_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
                <tr>
                    <th scope="row">Laravel</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Laravel</th>
                    <td>シンプルメモ帳をLaravelで作成する</td>
                    @if($item->laravel == 0)
                    <td class="text-danger font-weight-bold">未達成</td>
                    @elseif($item->laravel == 10)
                    <td class="text-primary font-weight-bold">達成済み</td>
                    @endif
                    @if($item->laravel == 10)
                    <td class="font-weight-bold">{{ $item->laravel_at }}</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection