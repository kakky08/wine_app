@extends('layouts.base')

@section('header')
    @include('parts.header.default')
@endsection

@section('side-bar')
    @include('parts.side-bar.default')
@endsection

@section('section')
    <h2>あなたにおすすめのワイン</h2>
    <div class="container-fluid col-lg-12 ">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="card col-lg-3 card_style">
                    <img src="https://placehold.jp/280x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <h2>ワイン一覧</h2>
    <div class="container-fluid col-lg-12 ">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="card col-lg-3 card_style">
                    <img src="https://placehold.jp/280x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endfor
        </div>
        <!-- TODO Paginationの編集 -->
        {{-- Pagination start --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
        {{-- Pagination end --}}
    </div>
@endsection
