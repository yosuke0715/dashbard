@extends('layouts.app')
@section('title', 'HTML&CSS')
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
<li class="nav-item active">
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
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">CSS 10本ノック【 対象ファイル：test_css 】</h1>
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
                    <h3 class="h3 mb-0 text-dark font-weight-bold">1本目：色を変える</h3>
                    <form action="{{ asset('/css_test/1') }}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_1 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_1 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_1 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test1.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">:nth-childについて調べてみる
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 1つ目は３番目のliのみ色を変える</li>
                    <li>② 2つ目は偶数番号だけ色を変える。</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test1-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-2' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">2本目：悪者を探そう</h3>
                    <form action="{{ asset('/css_test/2') }}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_2 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_2 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_2 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test2.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">メールアドレス折り返し CSS
                            で検索してみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① td_contentクラスのついたtdが横幅300pxで設定されているが実際は400pxになってしまっている</li>
                    <li>② 何が悪影響を及ぼしているかを調べ解決する</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test2-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-3' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">3本目：横並びにする</h3>
                    <form action="{{ asset('/css_test/3')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_3 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_3 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_3 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test3.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            flexbox 横並び　で検索してみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 要素を横並びにする</li>
                    <li>② 方法は１種類だけではないので何通りかでやってみる</li>
                    <li>③ できるだけfloatは使わないようにする</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test3-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-4' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">4本目：レイアウトを修正しよう</h3>
                    <form action="{{ asset('/css_test/4')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_4 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_4 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_4 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test4.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            float 解除で検索してみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① なぜかフッターが巻き込まれ横になってしまっている</li>
                    <li>② 原因を探り修正しよう</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test4-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-5' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">5本目：positionを使いこなす</h3>
                    <form action="{{ asset('/css_test/5')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_5 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_5 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_5 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test5.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            positionとtransformについて調べてみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 背景が黒になっているdivをど真ん中に設置しよう</li>
                    <li>② 少しでも左右上下に寄っていたら不正解</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test5-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-6' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">6本目：2列以降の修正</h3>
                    <form action="{{ asset('/css_test/6')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_6 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_6 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_6 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test6.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            CSS ２列目ずらす　で検索してみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① ２列目以降が見出しの番号のすぐ下から始まっているとわかりにくい</li>
                    <li>② そのためテキストと見出しは離して置くことが望ましい</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test6-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-7' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">7本目：レスポンシブ対応を行う</h3>
                    <form action="{{ asset('/css_test/7')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_7 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_7 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_7 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test7.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            CSS レスポンシブ対応で検索
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 携帯で見た時とPCで見た時のレイアウトを変えるのが目的である。</li>
                    <li>② 実際はiPadなどいろんな解像度であるが今回はiPhoneXの横幅である375pxだけでレスポンシブ対応を行ってみる。</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <div class="img_container" class="mx-auto w-50">
                    <img src="{{ asset('/img/complete/test7-min.png') }}" alt="完成" class="w-100">
                </div>
            </section>
            <section v-if="activeTab==='tabs-8' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">8本目：擬似要素を使ってみる</h3>
                    <form action="{{ asset('/css_test/8')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_8 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_8 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_8 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test8.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            CSS 擬似要素　と　CSS　z-indexで検索
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 背景の大きめの文字を擬似要素を用いて作っているがまだまだ他にも使い道は存在する。</li>
                    <li>② 条件：文字のカラーコード　#f5d4af</li>
                    <li>③ 条件：文字の大きさ　60px</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test8-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-9' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">9本目：transformを操る</h3>
                    <form action="{{ asset('/css_test/9')}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_9 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_9 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_9 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：css_test9.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            box_wrapperで500pxの正方形を作り、boxをど真ん中に設置するとできる。<br>
                            最初からから回転できるだけのスペースを用意しておく
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 背90度回転させる。みたいな機能が実際の環境でも使われています。。</li>
                    <li>② しかしtransformを使うと前後の要素と重なってしまいます。</li>
                    <li>③ それを防ぐためにHTMLの構造に変化を加えCSSで抑えてあげる必要があります。</li>
                    <li>④ HTMLの構造はすでに変てあるのでCSSのみを変てみましょう。</li>
                    <li class="mt-3">完成物↓</li>
                </ul>
                <img src="{{ asset('/img/complete/test9-min.png') }}" alt="完成" class="w-100">
            </section>
            <section v-if="activeTab==='tabs-10' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">10本目：CSS オリジナルサイト作成【 対象ファイル：simple_site 】</h3>
                    <form action="{{ asset('/css_test/10') }}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status" value="{{ $btn_status->css_10 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->css_10 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->css_10 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
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
                    <li><a href="https://www.pinterest.jp/ " target="_blank ">Pinterest（いろんなサイトが見れる）<i
                                class="fas fa-external-link-alt "></i></a></li>
                    <li>
                        <a href="https://o-dan.net/ja/ " target="_blank ">ODAN（写真）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://pixabay.com/ja/ " target="_blank ">pixabay（写真）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://tyoudoii-illust.com/category/business/ " target="_blank ">ちょうどいいイラスト（イラスト）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://www.happyhues.co/palettes/14 " target="_blank ">Happy Hues（カラーパレット）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://pixta.jp/ " target="_blank ">ピクスタ（写真）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://icooon-mono.com/ " target="_blank ">ICOOON MONO（アイコン）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://storyset.com/ " target="_blank ">storyset（ベクター写真）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                    <li>
                        <a href="https://fontawesome.com/ " target="_blank ">Font Awesome（アイコン）<i
                                class="fas fa-external-link-alt "></i></a>
                    </li>
                </ul>
            </section>
        </section>
    </div>

</div>
<!-- End of Content Wrapper -->
@endsection