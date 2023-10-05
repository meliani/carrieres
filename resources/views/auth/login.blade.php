@extends('layouts.ui.app')

@section('content')
    <div class="container">
        <div class="container col s12 m5 l5">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="card-title">
                    <h5>Identification</h5>
                </div>
                <div class="divider"></div>
                <div class="col s6 m5">
                    <p>
                        Cet espace sécurisé est réservé aux étudiants et enseignants de l'INPT.
                    </p>
                    <p> Afin de récupérer votre mot de passe, veuillez cliquer sur <a
                            href="{{ route('password.request') }}">"redéfinir ?"</a> et utiliser votre adresse email INPT.
                        Vous allez recevoir un message pour réinitialiser votre mot de passe et pouvoir accéder aux services
                        de la plateforme carrières.
                    </p>
                    <div class="card-content">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                {{ Form::textGroup(
                                    [
                                        'name' => 'email',
                                        'value',
                                        'label' => __('Email adress'),
                                        'placeholder',
                                        'class' => 'materialize-textarea validate',
                                        'icon' => 'account_circle',
                                        'helper',
                                        'required' => 'required',
                                        'cols' => 6,
                                        'type' => 'email',
                                    ],
                                    $errors,
                                ) }}

                                {{ Form::textGroup(
                                    [
                                        'name' => 'password',
                                        'value',
                                        'label' => __('Password'),
                                        'placeholder',
                                        'class' => 'materialize-textarea validate',
                                        'icon' => 'lock_outline',
                                        'helper',
                                        'required' => 'required',
                                        'cols' => 6,
                                        'type' => 'password',
                                    ],
                                    $errors,
                                ) }}
                            </div>
                            <div class="row">
                                <div class="input-field col m2">
                                    <button type="submit" class="btn waves-effect waves-light">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="input-field col s4 m4">
                                    <a class="btn btn-link waves-effect waves-teal btn-flat"
                                        href="{{ route('password.request') }}">{{ __('Reset password') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
