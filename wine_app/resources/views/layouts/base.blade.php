@extends('layouts.app')

@section('content')
    {{-- nav start --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light ps-3 pe-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="">ワインを探す</a>
                    <a class="nav-link" href="">メモ帳</a>
                    <a class="nav-link" href="#">お気に入り</a>
                    <a class="nav-link" href="">マイページ</a>
                    <a class="nav-link" href="#">ログアウト</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- nav end --}}

    <main>
        <div class="container-fluid">
            <div class="row">
                {{-- Side_bar start --}}
                <div class="col-lg-3 border-right bg-white vh-100">
                    {{-- Search_word start --}}
                    <form method="POST" action="" class="">
                        @csrf
                        <!-- TODO インプットの変更 -->
                        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="ワインの名前" aria-label="ワインの名前" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">検索</button>
</div>
                        <div class="conteiner">
                            <div class="row row-cols-lg-2">
                                <input type="text" name="search_word" class="form-control col" placeholder="ワインの名前">
                                <button type="submit" class="btn btn-success col">検索</button>
                            </div>
                        </div>
                    </form>
                    {{-- Search_word end --}}
                    {{-- Accordion_menu_type start --}}
                    <div class="accordion accordion-flush" id="accordion-menu-type">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    ワインの種類で選ぶ
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-menu-type">
                                <ul>
                                    <a href=""><li>aaa</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Accordion_menu_type end --}}
                    {{-- Accordion_menu_country start --}}
                    <div class="accordion accordion-flush" id="accordion-menu-country">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    産地で選ぶ
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-menu-country">
                                <ul>
                                    <a href=""><li>aaa</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Accordion_menu_country end --}}
                </div>
                {{-- Side_bar end --}}
                {{-- Section start --}}
                <div class="col-lg-9 container-fluid">
                    @yield('section')
                </div>
                {{-- Section end --}}
            </div>
        </div>
        </main>
        @endsection
