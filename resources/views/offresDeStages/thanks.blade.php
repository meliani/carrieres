@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">


            @include ('partials.messages')
            @include ('errors.list') {{-- Including error file --}}

            <div class="card-panel white">
                <div class="card-content">
                    <div class="section"><h3 class="header light center blue-text text-lighten-1">Merci.</h3></div>
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