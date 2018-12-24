@extends('layouts.ui')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

@endsection

@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1"><i class="large material-icons">supervisor_account</i></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel grey lighten-4">
                        @isset($encadrements)
                        <h5>Sujet de stage : {{ $encadrements[0]->intitule }}    </h6>
                        @endisset
                        <div class="divider">
                        </div>
                        {{ $advisors[]=null }}
                        @if($NbAdvisors>0)
                        <ul>
                        <strong>Liste des encadrants existants :</strong>
                        @foreach ($encadrants as $item)
                            <li>{{$item->name}}</li>
                            <?php  $advisors[]=['value'=>$item->id_prof] ?>
                        @endforeach
                        </ul>
                        @endif
                        <div class="row">
                            <div class="col s12">
                              <div class="row">
                                  <strong>Ajouter un encadrant/Examinateur :</strong>
                                  {!! Form::open(['action' => ['mesEncadrementsController@encadrer', $encadrements[0]->id], 'method' => 'post', 'files' => false]) !!}
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">supervisor_account</i>
                                  {{ Form::select('profs_advisor[]',$profs,array('multiple'=>true)) }}
                                  <input type="hidden" name="pfe_id" value={{ $encadrements[0]->id }}>
                                  {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light']) !!}
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

</script>
@endsection