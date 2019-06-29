
@extends('layouts.ui.app')
@section('title')| Demande de stagiaire @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                Demande de stagiaire INPT
            </h3>
        </div>
        @include ('errors.list')
        {{ Form::open(['route'=>['offers.store'],'files' => true]) }}
            @include('frontend.internships.offers.form.fields')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection