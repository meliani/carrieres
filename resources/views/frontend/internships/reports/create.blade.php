@extends('layouts.ui.app')
@section('title')| Demande de stagiaire @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                Soumission de rapport de stage INPT
                <h5 class="header light center blue-text text-lighten-1">La version numérique doit être transmise avant le jeudi 31 Octobre 2019</h5>
            </h3>
            
        </div>
        @include ('errors.list')
        {{ Form::open(['route'=>['reports.store'],'files' => true]) }}
            @include('frontend.internships.reports.fields')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection