@extends('layouts.ui')
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
        @include ('errors.list') {{-- Including error file --}}

                    {!! Form::open(['action' => 'InternshipController@store']) !!}

                        @include('space.internship.submit.fields')

                    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection