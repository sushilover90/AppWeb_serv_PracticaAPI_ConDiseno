@extends('welcome')

@section('content')

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{mix('css/ui.css')}}">
    <div class="container" align="center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="into">
                    <div class="card-header" id="header">Token generado, copialo y guardalo, necesistarás el token para usar nuestra API.</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{$token}}
                    </div>
                    <div class="card-footer" id="into">
                        <a class="btn btn-outline-info" href="/home" id="fond">Volver a inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
    <script src="{{mix('js/ui.js')}}"></script>

@endsection
