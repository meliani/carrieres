@extends('layouts.ui')

@section('content')

@section('buttons')

@endsection

@if(!isset($person))
<div class="container col s12 m12">
  <div class="card">
    <div class="card-content">
    Le profil que vous essayer d'afficher est inexistant.
    </div>
    <div class="card-action">
      <a href="#">Déclarer un bug</a>
    </div>
  </div>
</div>
@else
<div class="container">
  <h3 class="header light center blue-text text-lighten-1">Mon profil</h3>
  <div class="row">
    <div class="col s12 m5">
        @include('space.people.profile.details')
    </div>
@endif
{!! Form::model($person, ['route' => ['profile.update', $person->id], 'method' => 'patch']) !!}
<div class="col s12 m7">
@include('space.people.profile.fields')


    </div>


</div>

</div>
@endsection