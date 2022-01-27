@extends('layouts.base')

@section('header')
    @include('parts.header.default')
@endsection

@section('side-bar')
    @include('parts.side-bar.folder')
@endsection

@section('section')
{{-- Select_folder start --}}
<div class="col-12">
    <label for="inlineFormSelectPref" class="form-label">フォルダを選択</label>
    <select class="form-select" id="inlineFormSelectPref">
        <option value="" selected>----</option>
        @for ($i = 0; $i < 3; $i++)
            <option value="{{ $i }}">Folder{{ $i }}</option>
        @endfor
    </select>
</div>
{{-- Select_folder end --}}

{{-- Input_wine_name start --}}
<div class="">
    <label for="formGroupExampleInput" class="form-label">ワインの名前を入力</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
{{-- Input_wine_name end --}}

{{-- Select_type start --}}
<div class="col-12">
    <label for="inlineFormSelectPref" class="form-label">ワインのタイプを選択</label>
    <select class="form-select" id="inlineFormSelectPref">
        <option selected>----</option>
        @for ($i = 0; $i < 3; $i++)
            <option value="{{ $i }}">Type{{ $i }}</option>
        @endfor
    </select>
</div>
{{-- Select_type end --}}

{{-- Select_country start --}}
<div class="col-12">
    <label for="inlineFormSelectPref" class="form-label">原産国を選択</label>
    <select class="form-select" id="inlineFormSelectPref">
        <option selected>----</option>
        @for ($i = 0; $i < 3; $i++)
            <option value="{{ $i }}">Country{{ $i }}</option>
        @endfor
    </select>
</div>
{{-- Select_country end --}}
{{-- Select_grape start --}}
<div class="row">
    <label for="inlineFormSelectPref" class="form-label">ブドウの種類を選択</label>
    <div class="col-4">
        <select class="form-select" id="inlineFormSelectPref">
            <option selected>----</option>
            @for ($i = 0; $i < 3; $i++)
                <option value="{{ $i }}">Grape{{ $i }}</option>
            @endfor
        </select>
    </div>
    <div class="col-4">
        <select class="form-select" id="inlineFormSelectPref">
            <option selected>----</option>
            @for ($i = 0; $i < 3; $i++)
                <option value="{{ $i }}">Grape{{ $i }}</option>
            @endfor
        </select>
    </div>
    <div class="col-4">
        <select class="form-select" id="inlineFormSelectPref">
            <option selected>----</option>
            @for ($i = 0; $i < 3; $i++)
                <option value="{{ $i }}">Grape{{ $i }}</option>
            @endfor
        </select>
    </div>
</div>
{{-- Select_grape end --}}
{{-- Select_ start --}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">総合評価</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="flavor"  value="{{ $i }}" id="{{ 'flavor_' . $i }}">
            <label class="form-check-label" for="{{ 'flavor_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Flavor start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">香り</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="flavor"  value="{{ $i }}" id="{{ 'flavor_' . $i }}">
            <label class="form-check-label" for="{{ 'flavor_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Flavor end--}}

{{-- Evaluation_category_BitterTaste start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">苦味</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bitter_taste"  value="{{ $i }}" id="{{ 'bitter_taste_' . $i }}">
            <label class="form-check-label" for="{{ 'bitter_taste_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_BitterTaste end--}}

{{-- Evaluation_category_Afterglow start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">余韻</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="afterglow"  value="{{ $i }}" id="{{ 'afterglow_' . $i }}">
            <label class="form-check-label" for="{{ 'afterglow_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Afterglow end--}}

{{-- Evaluation_category_Taste start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">旨味</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="taste"  value="{{ $i }}" id="{{ 'taste_' . $i }}">
            <label class="form-check-label" for="{{ 'taste_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Taste end--}}

{{-- Evaluation_category_Bodied start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">濃さ</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bodied"  value="{{ $i }}" id="{{ 'bodied_' . $i }}">
            <label class="form-check-label" for="{{ 'bodied_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Bodied end--}}

{{-- Evaluation_category_Sweet_taste start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">甘味</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sweet_taste"  value="{{ $i }}" id="{{ 'sweet_taste_' . $i }}">
            <label class="form-check-label" for="{{ 'sweet_taste_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Sweet_taste end--}}

{{-- Evaluation_category_Fruit_taste start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">果実味</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fruit_taste"  value="{{ $i }}" id="{{ 'fruit_taste_' . $i }}">
            <label class="form-check-label" for="{{ 'fruit_taste_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Fruit_taste end--}}

{{-- Evaluation_category_Acidity_taste start--}}
<div class="input-group">
    <label for="exampleFormControlInput1" class="form-label col-12">酸味</label>
    @for ($i = 1; $i <= 5 ; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="acidity_taste"  value="{{ $i }}" id="{{ 'acidity_taste_' . $i }}">
            <label class="form-check-label" for="{{ 'acidity_taste_' . $i }}">
                {{ $i }}
            </label>
        </div>
    @endfor
</div>
{{-- Evaluation_category_Acidity_taste end--}}

    <div class="input-group">
        <label for="content" class="form-label col-12">メモ</label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-success">作成</button>

@endsection
