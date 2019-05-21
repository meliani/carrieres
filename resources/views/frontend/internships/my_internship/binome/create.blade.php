@extends('layouts.ui')
@section('title')| Déclaration de binome @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                Déclaration  de binome
            </h3>
        </div>
        @include ('errors.list')
        {{ Form::model($student,['route'=>['binomes.store']]) }}
            @include('frontend.internships.my_internship.binome.fields')
        
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection