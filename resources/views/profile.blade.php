@extends('welcome')

@section('content')

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
{{--    <link rel="stylesheet" href="{{mix('css/ui.css')}}">--}}
    <div class="px-5">
        <div id="app">
            <profile-component sm="{{ $sm }}"/>
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
{{--    <script src="{{mix('js/ui.js')}}"></script>--}}

@endsection
