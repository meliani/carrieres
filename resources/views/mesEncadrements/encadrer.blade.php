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
                        <div class="row">
                            <strong>Encadrement bien enregistré.</strong>
                            <div class="divider"></div>
                            <div class="col s12">
                                
                                <ul class="collection">
                                    <li class="collection-header">
                                        <h4>Ce PFE est actuellement encadré/examiné par :</h4>
                                    </li>
                                @foreach ($encadrants as $item)
                                    <li class="collection-item">{{$item->name}}</li>
                                @endforeach
                                </ul>
                              <div class="row">
                              </div>
                            </div>
                        </div>
                        <div class="card-action">
                                <a href="{!! route('mesEncadrements.index') !!}" class="waves-effect waves-teal btn">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('scripts')

<script>

</script>
@endsection