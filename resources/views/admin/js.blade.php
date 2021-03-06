@extends('layouts.app_admin')
@section('title', '管理者｜JavaScript')
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
<li class="nav-item active">
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
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">JavaScript 10本ノック【 対象ファイル：js_test 】</h1>
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
                    <h3 class="h3 mb-0 text-dark font-weight-bold">1本目：inputの値を取得</h3>
                </div>
                <h4 class="text-dark font-weight-bold"></h4>
                <p class="font_bold">対象ファイル：js_test1.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 送信ボタンが押されるとinputの内容が表示される</li>
                    <li>② 表示場所はid=outputArea</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-2' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">2本目：入力された文字数を数える</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test2.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① inputに入力された文字数をカウントする</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-3' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">3本目：confirmを使ってみる</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test3.html</p>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 入力された文字を表示させますか？というアラートを出す</li>
                    <li>② OKを押されたら入力された文字は○○ですと表示させる</li>
                    <li>③ キャンセルが押された場合何も表示させない</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-4' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">4本目：radioボタンの内容を表示</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test4.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 男性が選択された場合、あなたは男性ですねと表示</li>
                    <li>② 女性が選択された場合、あなたは女性ですねと表示</li>
                    <li>③ その他が選択された場合、あなたはその他ですねと表示</li>
                    <li>④ できるだけコードを簡潔にかく</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-5' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">5本目：正規表現を扱う</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test5.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 正規表現を用いてバリデーションを実装する</li>
                    <li>② アドレスが正しかった場合、入力されたメールアドレスは○○ですと表示する</li>
                    <li>③ 違うかった場合は、正しいメールアドレスを入力してくださいと表示させる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-6' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">6本目：配列祭り</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test6.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 配列からHTMLを取り出す</li>
                    <li>② 配列から値を取り出しconsole上に表示させる</li>
                    <li>③ 配列からCSSを取り出してください</li>
                    <li>④ 配列をループで表示させる[HTML上に表示させる]</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-7' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">7本目：ちょいむずfor文</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test7.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 下の図を作ってみる</li>
                    <li id="targetId" class="text-center"></li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-8' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">8本目：タブを作る</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test8.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① tab_menu_itemのインデックスを取り出す。(数字)</li>
                    <li>② tab_menu_itemの初めからついているcurrentを削除</li>
                    <li>③ クリックされたところにcurrentをつける</li>
                    <li>④ contentsは隠し取得したインデックスを持つものだけ表示する</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-9' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">9本目：カウントタイマー</h3>
                </div>
                <p class="font_bold">対象ファイル：js_test9.html</p>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① カウントタイマーを作成する</li>
                    <li>② 自動で更新する動くタイマーを作成する</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-10' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">10本目：電卓作成【 対象ファイル：simple_site 】</h3>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li class="mb-3">
                        <a href="https://yosuke0715.github.io/fm_education/" target="_blank">サンプルサイト<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>① 自己紹介サイトを作成する</li>
                    <li>② ヘッダー、フッターを用いたサイトにする</li>
                    <li>③ 必ずお問い合わせフォームを作成する。項目：名前・電話番号・メールアドレス・お問い合わせ内容</li>
                    <li>④ レスポンシブ対応は行わなくていい</li>
                    <li class="mt-4 text-lg">参考サイト</li>
                </ul>
            </section>
        </section>
    </div>

</div>
<!-- End of Content Wrapper -->
@endsection