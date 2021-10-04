@extends('layouts.app')
@section('title', 'JavaScript')
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
<li class="nav-item active">
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
    <h1 class="h3 mb-0 text-gray-800">JavaScript 10本ノック【 対象ファイル：js_test 】</h1>
</div>
<div class="spe_area">
    <div id="tabs">
    @extends('parts.nav')
        <section class="tab-content">
            <section v-if="activeTab==='tabs-1' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">1本目：inputの値を取得</h3>
                    <form action="{{ asset('/js_test/1' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_1 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_1 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_1 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <h4 class="text-dark font-weight-bold"></h4>
                <p class="font_bold">対象ファイル：js_test1.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            クリックイベントとtext()について調べよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 送信ボタンが押されるとinputの内容が表示される</li>
                    <li>② 表示場所はid=outputArea</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-2' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">2本目：入力された文字数を数える</h3>
                    <form action="{{ asset('/js_test/2' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_2 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_2 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_2 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test2.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            lengthについて調べよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① inputに入力された文字数をカウントする</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-3' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">3本目：confirmを使ってみる</h3>
                    <form action="{{ asset('/js_test/3' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_3 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_3 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_3 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test3.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            confirm js で検索してみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-2 text-dark font-weight-bold text-lg">
                    <li>① 入力された文字を表示させますか？というアラートを出す</li>
                    <li>② OKを押されたら入力された文字は○○ですと表示させる</li>
                    <li>③ キャンセルが押された場合何も表示させない</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-4' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">4本目：radioボタンの内容を表示</h3>
                    <form action="{{ asset('/js_test/4' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_4 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_4 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_4 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test4.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            radioボタン　データ取得 js で検索しよう
                    </div>
                </div>
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
                    <form action="{{ asset('/js_test/5' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_5 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_5 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_5 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test5.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            正規表現 メールアドレスについて調べてみよう
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 正規表現を用いてバリデーションを実装する</li>
                    <li>② アドレスが正しかった場合、入力されたメールアドレスは○○ですと表示する</li>
                    <li>③ 違うかった場合は、正しいメールアドレスを入力してくださいと表示させる</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-6' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">6本目：配列祭り</h3>
                    <form action="{{ asset('/js_test/6' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_6 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_6 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_6 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test6.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            配列や連想配列について調べよう<br>④はforeachを使う
                        </h6>
                    </div>
                </div>
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
                    <form action="{{ asset('/js_test/7' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_7 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_7 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_7 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test7.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            ① for文の中にfor文を入れる<br>
                            ② 2つ目のfor文の条件についてよく考えてみる<br>
                            ③ appendを使い代入していく
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① 下の図を作ってみる</li>
                    <li id="targetId" class="text-center"></li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-8' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">8本目：タブを作る</h3>
                    <form action="{{ asset('/js_test/8' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_8 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_8 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_8 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test8.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            display;none:を付け替えることで表示非表示を操作する
                        </h6>
                    </div>
                </div>
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
                    <form action="{{ asset('/js_test/9' )}}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_9 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_9 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_9 == 10)
                            <span>クリア済</span>
                            @endif
                        </button>
                    </form>
                </div>
                <p class="font_bold">対象ファイル：js_test9.html</p>
                <a class="nav-link collapsed btn btn-danger d-inline-block text-lg  mt-1 mb-3 font-weight-bold" href="#"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-lightbulb"></i>
                    <span>ヒント（困ったらクリック！）</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gray-300 py-5 collapse-inner rounded mb-5">
                        <h6 class="collapse-header text-center text-lg text-dark font-weight-bold">
                            hint/js_test9.jsを参考にする
                        </h6>
                    </div>
                </div>
                <ul class="list-unstyled mt-4 text-dark font-weight-bold text-lg">
                    <li>① カウントタイマーを作成する</li>
                    <li>② 自動で更新する動くタイマーを作成する</li>
                </ul>
            </section>
            <section v-if="activeTab==='tabs-10' ">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="h3 mb-0 text-dark font-weight-bold">10本目：電卓作成【 対象ファイル：simple_site 】</h3>
                    <form action="{{ asset('/js_test/10') }}" method="POST" id="form_progress">
                        @csrf
                        <input type="hidden" name="btn_status" id="btn_status"
                            value="{{ $btn_status->js_10 }}">
                        <button type="button" onclick="submitData()" id="submit_data"
                            class="d-none d-sm-inline-block btn btn-primary shadow-sm mr-5 text-lg rounded-pill px-5 py-2">
                            @if($btn_status->js_10 == 0)
                            <span>できた！</span>
                            @elseif($btn_status->js_10 == 10)
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
                </ul>
            </section>
        </section>
    </div>

</div>
<!-- End of Content Wrapper -->
@endsection