@extends('layouts.ui.app')

@section('users_buttons')
@include(Button::user_buttons())
@endsection  

@section('content')

<a href="{!! URL::to('extractions/AdvisingStatsExport/xlsx') !!}" class="waves-effect waves-teal btn">Exporter vers excel</a>

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Statistiques des encadrements</h4>
        </div>


    {!! Form::open(['method'=>'GET','url'=>'Internship/Advising/Stats','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="s" placeholder="Chercher par Professeur...">
        </div>
    {!! Form::close() !!}
    <div class = "input-field col m2 s4">
        {!! Form::open(['url' => ['Internship/Advising/Stats'], 
        'method' => 'get', 'files' => false]) !!}
        <div class="input-field col s12">
            <i class="material-icons prefix">supervisor_account</i>
            {!! Form::select('department',
            $department_list,
        array('department_id' => 'department_id')) !!}
            {{ Form::label('department', 'Departement') }}
        
        </div>
        
        {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light']) !!}
        {!! Form::close() !!}
      </div>
    <div class="container col s12 m12">
    @include('space.internship.stats.list')
    </div>
@endsection
