@extends('layouts.app_admin')
@section('title', '管理者｜PHP')
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
<li class="nav-item active">
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
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">PHP 10本ノック【 対象ファイル：test_php 】</h1>
</div>
<div class="spe_area">
    <div id="tabs">
        <ul class="list-unstyled d-flex justify-content-center font-weight-bold bg-warning p-3 text-dark rounded"
            style="cursor: pointer;">
            <li v-bind:class="{active: activeTab==='tabs-1' } " v-on:click="activeTab='tabs-1' ">
                【 1本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-2' } " v-on:click="activeTab='tabs-2' ">
                【 2本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-3' } " v-on:click="activeTab='tabs-3' ">
                【 3本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-4' } " v-on:click="activeTab='tabs-4' ">
                【 4本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-5' } " v-on:click="activeTab='tabs-5' ">
                【 5本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-6' } " v-on:click="activeTab='tabs-6' ">
                【 6本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-7' } " v-on:click="activeTab='tabs-7' ">
                【 7本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-8' } " v-on:click="activeTab='tabs-8' ">
                【 8本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-9' } " v-on:click="activeTab='tabs-9' ">
                【 9本目 】
            </li>
            <li v-bind:class="{active: activeTab==='tabs-10' } " v-on:click="activeTab='tabs-10' ">
                【 10本目 】
            </li>
        </ul>
        <section class="tab-content">
            <section v-if="activeTab==='tabs-1' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">1本目：inputからデータを受け取る</h3>
                </div>
                <h4 class="text-dark font-weight-bold"></h4>
                <p class="font_bold">対象ファイル：php_test1.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① inputのデータを取得する</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-2' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">2本目：電話番号からハイフンを取り除く</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test2.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① inputに入力された電話番号からハイフンがあれば取り除こう</li>
                    <li>② 090-1111-1111 → 09011111111 にする</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-3' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">3本目：if文練習</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test3.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 1~50の数字が３の倍数５の倍数７の倍数の時</li>
                    <li>② 例) 6は３の倍数です。のように表示させる</li>
                    <li>③ 例) 15は3と5の倍数ですのように表示させる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-4' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">4本目：配列の中身を表示させる</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test4.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 実務では配列の中に何が入っているかどうか確認するときによく使います。</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-5' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">5本目：aタグを使わないPHPのページ遷移</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test5.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① クリックイベントを使わずにPHPのメソッドを使い遷移させる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-6' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">6本目：DBへの接続</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test6.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① DBに接続できたら「DBに接続されました」を表示させる</li>
                    <li>② 接続できない場合はエラー文を表示させる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-7' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">7本目：配列の結合</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test7.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 4つの配列を１つにまとめる</li>
                    <li>② 1つのインデックスにid, name, gender, blood_typeを入れる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-8' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">8本目：foreachを扱う</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test8.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 7本目に作った多次元配列の中身をHTMLに出力する</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-9' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">9本目：オリジナルサイトのお問い合わせ機能を実装する</h3>
                </div>
                <p class="font_bold">対象ファイル：php_test9.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① JSで制御していたバリデーション部分をPHPに書き換える</li>
                    <li>② お問い合わせ内容をconfirm.phpで表示する</li>
                    <li>③ 実際にメールアドレスには送らなくていい。（表示のみ）</li>
                    <li>④ 余力があればバリデーションを増やす</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-10' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">10本目：シンプルメモ帳を作成【 対象ファイル：memo_php 】</h3>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li class="mb-3">
                        <a href="https://yosuke0715.github.io/fm_education/" target="_blank">サンプルサイト<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>① メモ追加機能を実装する</li>
                    <li>② メモ削除機能を実装する</li>
                    <li>③ メモ内容編集機能を実装する</li>
                    <li>④ データ管理は全てDBで行う</li>
                    <li class="mt-3">完成物例↓</li>
                </ul>
                <img src="{{ asset('/img/another/php.png') }}" alt="メモ帳" class="w-100">
            </section>
        </section>
    </div>

</div>
<!-- End of Content Wrapper -->
@endsection