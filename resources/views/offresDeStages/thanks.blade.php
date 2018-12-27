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

            <div class="card-panel grey lighten-4">
                <div class="card-content">
                    <div class="section"><h3 class="header light center blue-text text-lighten-1">Votre offre de stage est bien enregistrée.</h3></div>
                    </div>
                </div>
                <div class="card-action">
                    <div class = "input-field">
                        {!! Html::link('/offresDeStages','Reposter une autre offre', ['class' => 'btn waves-effect waves-light blue lighten-1']) !!}
                        <a href="{!! route('welcome') !!}" class="waves-effect waves-blue btn-flat">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection