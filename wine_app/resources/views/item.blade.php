@extends('layouts.base')

@section('header')
    @include('parts.header.default')
@endsection

@section('side-bar')
    @include('parts.side-bar.default')
@endsection

@section('section')
{{-- Button_group start --}}
<div class="d-flex bd-highlight mb-3">
    <button type="button" class="btn btn-outline-primary me-auto bd-highlight">戻る</button>
    <button type="button" class="btn btn-outline-success bd-highlight">メモの作成</button>
    <button type="button" class="btn btn-outline-danger bd-highlight">お気に入り</button>
</div>
{{-- Button_group end --}}
{{-- Item_card start --}}
<div class="card col-lg-12">
    <div class="row">
        <div class="col-lg-5" style="max-width: 440px;">
            <img src="https://placehold.jp/440x320.png" alt="...">
        </div>
        <div class="col-lg-7">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>
{{-- Item_card end --}}
{{-- Search_button start --}}
<div class="d-grid gap-2">
    <button type="button" class="btn btn-outline-warning">飲み比べワインを検索する</button>
    <button type="button" class="btn btn-outline-info">検索条件を絞って検索する</button>
</div>
{{-- Search_button end --}}

@endsection
