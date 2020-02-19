@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{mix('css/ui.css')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card" id="into">
                        <div class="card-header; text-center" id="header">Información del usuario</div>

                        <div id="app">
                            <summoner-info>

                            </summoner-info>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
        <script src="{{mix('js/ui.js')}}"></script>
@endsection
