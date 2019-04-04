@extends('layouts.ui')

@section('users_buttons')
@include('partials.buttons.buttons_wrapper')
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
    <div class="container col s12 m12">
    @include('space.internship.stats.list')
    </div>
@endsection
