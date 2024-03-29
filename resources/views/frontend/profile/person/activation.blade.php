@extends('layouts.ui.app')
@section('title', 'Mieux vous connaître')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')

@section('buttons')

@endsection


<div class="container">
  <h3 class="header light center blue-text text-lighten-1">@lang('newlife.activation.title')</h3>
  <div class="row">
    @include ('errors.list')
{!! Form::model($person, ['route' => ['person.update', 'person' => user('id')], 'method' => 'PATCH','files' => false]) !!}
<div class="col s12 m5">
  @include('frontend.profile.person.cards.details')
</div>
    <div class="col s12 m7">
        @include('frontend.profile.person.form')
    </div>

    {!! Form::close() !!}
  </div>

</div>
@endsection