@extends('layouts.ui')

@section('content')                

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    Bienvenue ici, Veuillez commencer par cliquer sur le menu en haut ( votre nom ) pour accéder aux fonctionnalités.
                </div>
            </div>
        </div>       
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    Welcome here, click on the menu to to start enjoying our e-services.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
