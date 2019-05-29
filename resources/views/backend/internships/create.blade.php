@extends('layouts.ui.app')
@section('title')| Déclarer mon stage @endsection

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
        {{ Form::model($internship,['route'=>['backend.internships.store']]) }}
            @include('backend.internships.fields')
        
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection