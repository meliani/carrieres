@extends('layouts.ui.app')

@section('content')

@section('buttons')

@endsection


<div class="container">
  <h3 class="header light center blue-text text-lighten-1">Mon profil</h3>
  <div class="row">
{!! Form::model($person, ['route' => ['person.update', 'id' => user('id')], 'method' => 'PATCH','files' => true]) !!}

    <div class="col s12 m7">
        @include('frontend.profile.person.form')
    </div>
    <div class="col s12 m5">
        @include('frontend.profile.person.cards.details')
    </div>
    {!! Form::close() !!}
  </div>

</div>
@endsection