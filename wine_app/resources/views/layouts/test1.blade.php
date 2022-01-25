@extends('layouts.app')

@section('content')

@yield('header')
<main>
        <div class="container-fluid">
            <div class="row">
                {{-- Side_bar start --}}
                <div class="col-lg-3 border-right bg-white vh-100">
                    @yield('side_bar')
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
