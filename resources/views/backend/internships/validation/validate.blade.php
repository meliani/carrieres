@extends('layouts.ui.app')

@section('css')
@endsection

@section('content')
    @isset($internship)
        <div class="row center">
            <i class="large material-icons prefix blue-text">supervisor_account</i>
            <h4 class="header light center blue-text text-lighten-1">{{ $internship->student->full_name }}</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h5 class="blue-text"><i class="small material-icons blue-text">subject</i> Titre du PFE</h5>
                        <p>{{ $internship->title }}</p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text"><i class="small material-icons blue-text">subject</i> Descriptif detaillé du PFE
                        </h5>
                        <p>{{ $internship->description }}</p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i> Entreprise et
                            lieu</h5>
                        <p>{{ $internship->organization_name }}</p>
                        <p>{{ $internship->adresse }},{{ $internship->city }}, {{ $internship->country }} </p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i> Dates</h5>
                        <p>Date debut de stage : {{ $internship->starting_at->format('d M Y') }}</p>
                        <p>Date fin de stage : {{ $internship->ending_at->format('d M Y') }}</p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i> Rémuneration et
                            charges horaires</h5>
                        <p>La rémuneration de ce stage sera : {{ $internship->remuneration }} (par mois)</p>
                        <p>Les heures de travail seront fixés comme suit : {{ $internship->load }} (Heures par semaine)</p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i> Representation de
                            l'entreprise et l'encadrant externe</h5>
                        <p>L'entreprise est representée par {{ $internship->parrain_name }}, en qualité de
                            {{ $internship->parrain_fonction }}.</p>

                        <p>L'encadrement sera efectué par {{ $internship->encadrant_ext_name }}, en qualité de
                            {{ $internship->encadrant_ext_fonction }} au sein de l'entreprise d'accueil.</p>
                    </div>
                    <div class="card-panel">
                        <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i>
                            {{ __('Additional contacts') }}
                        </h5>
                        <p>{{ $internship->parrain_name }}: {{ $internship->parrain_tel }}, {{ $internship->parrain_mail }}
                        </p>
                        <p>{{ $internship->encadrant_ext_name }}: {{ $internship->encadrant_ext_tel }},
                            {{ $internship->encadrant_ext_mail }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="row">
                        {!! Form::open([
                            'action' => ['Backend\Project\ProjectController@store', 'id' => $internship->id],
                            'method' => 'post',
                            'files' => false,
                        ]) !!}
                        <div class="input-field col s12">
                            <input type="hidden" name="id" value={{ $internship->id }}>
                            <p class="divider"></p>
                            {!! Form::submit('Approuver et Signer en tant que ' . user()->name, ['class' => 'btn text-white blue']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset
@endsection

@section('scripts')
@endsection
