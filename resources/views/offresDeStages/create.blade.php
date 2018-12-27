@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">

                @if(Session::has('message'))
                <div class="card-panel green lighten-2">
                        <div class="card-content"><h8 class="light center white-text"><em> {!! session('message') !!}</em></h5>
                    </div>
                </div>
            @endif
            
                    @include ('errors.list') {{-- Including error file --}}

            <div class="card-panel white">
                <div class="card-content">
                    <div class="section"><h3 class="header light center blue-text text-lighten-1">Nouvelle offre de stage</h3></div>

                                {!! Form::open(['route' => 'offresDeStages.store', 'files' => true]) !!}

                                    @include('offresDeStages.fields')

                                {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection