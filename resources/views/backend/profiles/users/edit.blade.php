@extends('layouts.ui.app')

@section('title', '| Edit User')

@section('content')

<div class='container'>

    <h1><i class='material-icon'>mode_edit</i> Modifier {{$user->name}}</h1>
    <hr>
    @include ('errors.list')

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }} 
    {{-- Form model binding to automatically populate our fields with user data --}}
    <!-- Text -->
    {{ Form::textGroup([
        'name' => 'name',
        'value' ,
        'label' => 'Nom d\'utilisateur',
        'placeholder' ,
        'class' => 'validate',
        'icon' ,
        'helper' => '',
        'required',
        'cols' => 5,
    ], $errors) }}
    {{ Form::textGroup([
        'name' => 'email',
        'value' ,
        'label' => 'Email (identifiant) d\'utilisateur',
        'placeholder' ,
        'class' => 'validate',
        'icon' ,
        'helper' => '',
        'required',
        'cols' => 5,
    ], $errors) }}

    <h5><b>Assigner des roles</b></h5>

    <div class='card'>

            <label>
        @foreach ($roles as $role)
            {{ Form::checkboxGroup([
                'name' => 'roles[]',
                'value' => $role->id,
                'label' => $role->name,
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'Ajouter ou enlever ce droit',
                'required',
                'cols' => 6,
                'data' => $user->roles,
            ], $errors) }}

        @endforeach
    </div>

    {{ Form::textGroup([
        'name' => 'password',
        'value' ,
        'label' => 'Mot de passe',
        'placeholder' ,
        'class' => 'validate',
        'icon' ,
        'helper' => '',
        'required',
        'cols' => 5,
        'type' => 'password',
    ], $errors) }}
    {{ Form::textGroup([
        'name' => 'password_confirmation',
        'value' ,
        'label' => 'Confirmation de mot de passe',
        'placeholder' ,
        'class' => 'validate',
        'icon' ,
        'helper' => '',
        'required',
        'cols' => 5,
        'type' => 'password',
    ], $errors) }}

    {{ Form::submit('Modifier', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection