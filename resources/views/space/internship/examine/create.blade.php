@extends('layouts.ui.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

@endsection

@section('content')

<div class="row center">
    <i class="large material-icons prefix blue-text">supervisor_account</i>
<h4 class="header light center blue-text text-lighten-1"></h4>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6">                        

        </div>
        <div class="col s12 m4 l4">
            <div class="row">
                <strong>Ajouter des examinateurs :</strong>
                {!! Form::open(['action' => ['Internship\AdvisingController@store', 'pfe_id' => request()->pfe_id], 'method' => 'post', 'files' => false]) !!}
                <div class="input-field col s12">
                    <i class="material-icons prefix">supervisor_account</i>
                    {!! Form::select('id_exami1',[null=>'Enseignants ...','NULL'=>'Désactiver']+$profs,array('single','id'=>'profs')) !!}
                    {{ Form::label('id_exami1', 'Examinateur 1') }}

                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">supervisor_account</i>
                    {{ Form::select('id_exami2',[null=>'Enseignants ...','NULL'=>'Désactiver']+$profs,null,array('single','id'=>'profs')) }}
                    {{ Form::label('id_exami2', 'Examinateur 2') }}

                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">supervisor_account</i>
                    {{ Form::select('id_exami3',[null=>'Enseignants ...','NULL'=>'Désactiver']+$profs,null,array('single','id'=>'profs')) }}
                    {{ Form::label('id_exami3', 'Examinateur 3') }}

                </div>
                    <input type="hidden" name="pfe_id" value={{ request()->pfe_id }}>
                    {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light white-text blue']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
      $(document).ready(function(){
          //$('#profs').select2();
       });
</script>
@endsection