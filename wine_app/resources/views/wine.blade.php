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
                <div class="col-lg-3">
                Column
                </div>
            @endfor
        </div>
    </div>
    <h2>ワイン一覧</h2>
    <div class="container-fluid col-lg-12 ">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-lg-3">
                Column
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
