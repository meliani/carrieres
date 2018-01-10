@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section"><h3 class="header light center blue-text text-lighten-1">Déclaration de stage PFE</h3></div>

                    {!! Form::open(['route' => 'internship.store']) !!}

                        @include('internship.fields')

                    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection