@extends('welcome')

@section('content')
<div class="container" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="into">
                <div class="card-header" id="header" >Menú</div>

                <div class="card-body" id="into">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a class="btn btn-outline-info mb-3" href="/board" id="fond">Información General del Usuario</a>
                    </div>
                    @if(Auth::user()->api_token==null)
                        <form action="/token/crear" method="post">
                            <div>
                                <button class="btn btn-outline-info" type="submit" id="fond">Crear token</button>
                            </div>
                            @else
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-3 btn btn-outline-info" href="/token/get" id="fond">Ver token</a>
                                    </div>
                                </div>
                                <form action="/token/borrar" method="post">
                                    <div>
                                        <button class="btn btn-outline-info" type="submit" id="fond">Borrar token</button>
                                    </div>
                                    @endif
                                    @csrf
                                </form>
                        </form>
            </div>
        </div>
    </div>
</div>

<div class="container" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card-header">¡Importante!</div>
                            <p id="into">Para poder hacer uso de nuestro servicio necesitas tener una cuenta en Riot
                                y generar una token valida, si ya tienes una no olvides verificar su vigencia
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-info" id="fond"onclick="window.location.href = 'https://auth.riotgames.com/login#client_id=riot-developer-portal&redirect_uri=https%3A%2F%2Fdeveloper.riotgames.com%2Foauth2-callback&response_type=code&scope=openid%20email%20summoner'";>Generar Riot Token</button>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-12">
                            <a href="/riottoken" id="fond" class="btn btn-outline-info">Ver Riot token</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
