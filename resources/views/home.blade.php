@extends('layouts.ui')

@section('content')                

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container home">
    <div class="row">
    <div class="col s12 m4 l4">
        <h6>Bienvenue</h6>
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <img src="https://image.flaticon.com/icons/svg/1256/1256649.svg" width="64" height="64">
            <p>Cliquez sur le menu au-dessus pour explorer les fonctionnalités de la platforme carrières.</p>
            </div>
            <div class="card-action">
            <a href="#">Voir mon profile</a>
            </div>
        </div>
        </div>
        <div class="col s12 m4 l4">
        <h6>Welcome</h6>
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <img src="https://image.flaticon.com/icons/svg/1256/1256649.svg" width="64" height="64">
                <p>Click on the menu above to explore our eservices.</p>
                </div>
                <div class="card-action">
                <a href="#">View my profile</a>
                </div>
            </div>
        </div>
</div>
@endsection
