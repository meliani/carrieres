@section('buttons')
  @role('Admin')
  <a href="{{ route('offers.create') }}" class="left btn-floating btn-large halfway-fab waves-effect waves-light white">
  <i class="tiny material-icons blue-grey-text textlighten-5">add</i></a>
  @endrole
@endsection
{{-- dd($offersDeStages) --}}
@if(!isset($offers))
<div class="offre col s12 m12">
  <div class="card">
    <div class="card-content">
    Oups aucun stage n'est adapté a votre profil.
    </div>
    <div class="card-action">
      <a href="#">Déclarer un bug</a>
    </div>
  </div>
</div>
@else

<div class="section">

  <div class="section">
    <div class="row">
      @foreach ($offers as $offer)
              <div class="offre col s12 m6 l4 xl4">
                  <div class="card hoverable">
                    <div class="card-content">
                    <!-- <img src="/images/badges/pfe.svg" width="100pt"> !-->
                      @if(isset($offer->expire_at)) 
                        <span class="new badge orange" data-badge-caption="{{$offer->expire_at}}"></span>
                      @endif
                    <ul class="collapsible">
                      <li class="active">
                      <li>
                        <div class="collapsible-header">
                          <h5 class='header5 blue-grey-text textlighten-5'>
                          <i class="small material-icons blue-grey-text textlighten-5">business</i>
                          {!!  $offer->raison_sociale !!}
                          </h5>
                        </div>
                        @if($offer->lieu_de_stage)
                        <div class="collapsible-body">
                        <p><i class="small material-icons blue-grey-text textlighten-5">place</i> 
                        {!! $offer->lieu_de_stage !!}
                        </p>
                        </div>
                        @endif
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">subject</i>{!!  str_limit($offer->intitule_sujet,50) !!}</div>
                        <div class="collapsible-body"><p>{!!  $offer->intitule_sujet !!}</p></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">queue</i>Détails et Prérequis</div>
                        <div class="collapsible-body"><p>{!!  $offer->descriptif !!}</p></div>
                      </li>
                      @if($offer->mots_cles)
                      <li>
                        <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">local_offer</i>Keywords</div>
                        <div class="collapsible-body"><p>{!!  $offer->mots_cles !!}</p></div>
                      </li>
                      @endif
                      @if($offer->document_offre)
                      <li>
                      <div class="collapsible-header">Pièce jointe</div>
                      <div class="collapsible-body"><p>{!!  Html::link($offer->document_offre,"Voir le document") !!}</p></div>
                      </li>
                      @endif
                    </ul>

                      @if(isset($offer->applyable))
                      @if($offer->applyable==0) 
                        <span class="new badge green" data-badge-caption="Candidature directe"></span>
                      @endif
                      @endif
                    </div>

                    <div class="card-action">
                      @if(isset($offer->applyable))
                        @if($offer->applyable==0) 
                          <a href="{{ route('offers.show', $offer->id) }}">Voir l'offre</a>
                        @endif
                        @else
                          <a href="{{ route('applications.create', ['offer'=>$offer->id]) }}">Postuler</a>
                      @endif
                      
                      @role('Admin')
                      <a href="{{ route('offers.edit', $offer->id) }}" class="right btn-floating btn halfway-fab waves-effect waves-light white">
                      <i class="tiny material-icons blue-grey-text textlighten-5">edit</i></a>
                      @endrole
                    </div>
                  </div>
              </div>
        @endforeach
      @endif
    </div>
</div>