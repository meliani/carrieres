@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section"><h5>Nouvelle offre de stage PFE</h5></div>

                    {!! Form::open(['route' => 'offresStages.store', 'files' => true]) !!}

                        @include('offres_stages.fields')

                    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection