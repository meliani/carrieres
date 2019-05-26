@extends('layouts.ui.app')

@section('title', '| Edit User')

@section('content')

<div class='container'>

    <h1><i class='material-icon'>mode_edit</i> Edit {{$user->name}}</h1>
    <hr>
    @include ('errors.list')

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }} 
    {{-- Form model binding to automatically populate our fields with user data --}}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-input'>
        @foreach ($roles as $role)
        {{ Form::label($role->name, ucfirst($role->name)) }}<br>

            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}

        @endforeach
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection