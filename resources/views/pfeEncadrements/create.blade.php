@extends('layouts.ui.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

@endsection

@section('content')

        <div class="row center">
            <i class="large material-icons prefix blue-text">supervisor_account</i>
        <h4 class="header light center blue-text text-lighten-1">{{$encadrements[0]->student_name}}</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12">                        

                    <div class="card-panel grey lighten-4">
                            @isset($encadrements)
                            <h5 class="blue-text"><i class="small material-icons blue-text">subject</i>{{ $encadrements[0]->intitule }}</h5>   
                                <h5 class="blue-text lighten-5"><i class="small material-icons blue-text">business</i>
                                {{ $encadrements[0]->raison_sociale }}</h6>
                            @endisset
                       
                        {{ $advisors[]=null }}
                        @if($NbAdvisors>0)
                        
                        <ul class="collection">
                        <li class="collection-header"><h4>Liste des encadrants existants</h4></li>
                        @foreach ($encadrants as $item)
                            <li class="collection-item">{{$item->advisorName}}</li>
                            <?php  $advisors[]=['value'=>$item->id_prof] ?>
                        @endforeach
                        </ul>
                        @endif
                        <div class="row">
                            <div class="col s12">
                              <div class="row">
                                  <strong>Ajouter un encadrant/Examinateur :</strong>
                                  {!! Form::open(['action' => ['pfeEncadrementsController@store', 'pfe_id' => $encadrements[0]->id], 'method' => 'post', 'files' => false]) !!}
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">supervisor_account</i>
                                  {{ Form::select('profs_advisor[]',$profs,null,array('multiple','id'=>'profs')) }}
                                  <input type="hidden" name="pfe_id" value={{ $encadrements[0]->id }}>
                                  <p class="divider"></p>
                                  {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light white-text blue']) !!}
                                  {!! Form::close() !!}

                                </div>
                              </div>
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
          $('#profs').select2();
       });
</script>
@endsection