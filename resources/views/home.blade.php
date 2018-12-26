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
        <div class="col s12 m6">

            
            <div class="card">
                <div class="card-content">
                    Bienvenue. Cliquez sur le menu au-dessus pour explorer les fonctionnalités de la platforme carrières.
                </div>
            </div>
        </div>       
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    Welcome. Click on the menu above to explore our eservices.
                </div>
            </div>
        </div>
<!--
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content  green white-text">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                    <h4 class="card-stats-number">566</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                    </p>
                </div>
                <div class="card-action  green darken-2">
                    <div id="clients-bar"><canvas width="290" height="25" style="display: inline-block; width: 290px; height: 25px; vertical-align: top;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
-->
</div>
@endsection
