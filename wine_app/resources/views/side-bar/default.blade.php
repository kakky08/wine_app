@extends('layouts.base')

@section('side-bar')
    {{-- Side_bar start --}}
    <div class="col-lg-3 border-right bg-white vh-100">
        {{-- Search_word start --}}
        <form method="POST" action="" class="row">
            @csrf
            <input type="text" name="search_word" class="form-control col-lg-8" placeholder="ワインの名前">
            <button type="submit" class="btn btn-success col-lg-4">検索</button>
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
    {{-- Content start --}}
    @yield('')
    <div class="col-lg-9 container-fluid">
    </div>

    {{-- Content end --}}
@endsection
