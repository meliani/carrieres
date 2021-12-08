@extends('layouts.ui.app')
@section('title','| Déclarer mon stage')
@section('users_buttons')
    @include(Button::home_button())
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                Déclaration de stage
            </h3>
        </div>
        @include ('errors.list')
        {{ Form::model($internship,['route'=>['internships.store']]) }}
            @include('frontend.internships.my_internship.fields')
        
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection