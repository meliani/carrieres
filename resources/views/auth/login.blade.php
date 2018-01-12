@extends('layouts.ui')

@section('content')
<div class="container">
<div class="container col s12 m5 l5">
    <div class="card-panel grey lighten-5 z-depth-1">
        <div class="card-title"><h5>Identification</h5></div>
        <div class="divider"></div>
        <div class="col s6 m5">    
            <p>
                Cet espace sécurisé est réservé aux étudiants 
                de l'INPT ayant rempli au préalable le formulaire "Mieux vous connaître" et vérifié par l'administration.
                </p>
             <p>    Afin de récupérer votre mot de passe, veuillez utiliser la même adresse email renseignée et cliquer sur <a href="{{ route('password.request') }}">"redéfinir ?"</a>". 
                Vous aller recevoir un message pour réinitialiser votre login et pouvoir accéder aux offres PFE 2018.
             </p>
        <div class="card-content">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class = "row">
                    <div class="input-field col s9 m4 l6">
                        <i class = "material-icons prefix">account_circle</i>
                        <input id="email" type="email"  class="active validate {{ $errors->has('email') ? 'invalid' : '' }}"  required name="email" value="{{ old('email') }}" autofocus>
                        <label	@if ($errors->has('email')) data-error=" {{ $errors->first('email') }}"
                                @endif for="email">Adresse email</label>
                    </div>
       
                    <div class="input-field col s9 m4 l6">
                        <i class = "material-icons prefix">lock_outline</i>
                        <input id="password" type="password" class="validate {{ $errors->has('password') ? 'invalid' : '' }}" name="password" required>
                        <label 	@if ($errors->has('password')) data-error="{{ $errors->first('password') }}"
                                @endif for="password">Mot de passe</label>
                    </div>
                </div>    
                <div class = "row">


                    <div class="input-field col s2 m3">
                        <button type="submit" class="btn waves-effect waves-light">
                            Login
                        </button>
                    </div>
                    <div class="input-field col s2 m3">
                        <a class="btn btn-link waves-effect waves-teal btn-flat" href="{{ route('password.request') }}">Redéfinir ?</a>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
