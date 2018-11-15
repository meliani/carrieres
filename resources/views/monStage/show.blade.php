@extends('layouts.ui')

@section('content')
<div class = "card-panel">
  <div class = "card-panel"><h5>{{  $offre->intitule_sujet }}</h5></div>

                  <ul class="collection with-header">
			<li class="collection-header">
                        <h5 class='header5 blue-grey-text textlighten-5'>
                        <i class="small material-icons blue-grey-text textlighten-5">business</i>
                        {!!  $offre->raison_sociale !!}
                        </h5>
                  <p><i class="small material-icons blue-grey-text textlighten-5">place</i>
                  {!! nl2br($offre->lieu_de_stage) !!}
                  </p>
                  </li>
                  <li  class="collection-item">
                  <i class="small material-icons blue-grey-text textlighten-5">queue</i>
                  Détails et Prérequis
                  <p>
                  {!!  nl2br($offre->descriptif) !!}
                  </p>
                  </li>
                  <li  class="collection-item">
                  <i class="small material-icons blue-grey-text textlighten-5">local_offer</i>
                  Keywords
                  <p>
                  {!!  $offre->mots_cles !!}
                  </p>
                  </li>


              @if($offre->document_offre)
              <li>
              <div class="collection-item">Pièce jointe</div>
              <div class="collection-item"><p>{!!  Html::link('storage/uploads/Stages/Offres/'.$offre->document_offre,"Voir le document") !!}</p></div>
              </li>
              @endif
            </ul>

</div>
@endsection