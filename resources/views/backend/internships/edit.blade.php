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
        {{ Form::model($internship,['route'=>['backend.internshipss.update',$internship],'method' => 'PUT']) }}
        
        @section('fields')
          <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Administration INPT</h4>
            <!-- Raison Sociale Field -->
        </div>
        @include('backend.internships.fields.admin')

        @endsection
        @include('backend.internships.fields')
        
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection