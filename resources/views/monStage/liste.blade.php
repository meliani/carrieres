@section('buttons')
  @role('Admin')
  <a href="{{ route('offresStages.create') }}" class="left btn-floating btn-large halfway-fab waves-effect waves-light white">
  <i class="tiny material-icons blue-grey-text textlighten-5">add</i></a>
  @endrole
@endsection
{{-- dd($offresDeStages) --}}
@if(!isset($offresDeStages))
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
  <div class="row center">
  <h5 class="header col s12 light">Offres de stages PFE</h5>
  </div>
  <div class="section">
    <div class="row">
      @foreach ($offresDeStages as $offre)
        @if($offre->is_valid)
              <div class="offre col s12 m4 l4 xl3">
                <div class="card hoverable">
                  <div class="card-content">
                  <img src="/images/badges/pfe.svg" width="64" height="64">
                    @if(isset($offre->expire_at)) 
                      <span class="new badge orange" data-badge-caption="urgent"></span>
                    @endif
                  <ul class="collapsible">
                    <li class="active">
                    <li>
                      <div class="collapsible-header">
                        <h5 class='header5 blue-grey-text textlighten-5'>
                        <i class="small material-icons blue-grey-text textlighten-5">business</i>
                        {!!  $offre->raison_sociale !!}
                        </h5>
                      </div>
                      <div class="collapsible-body">
                      <p><i class="small material-icons blue-grey-text textlighten-5">place</i> 
                      {!! $offre->lieu_de_stage !!}
                      </p>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">subject</i>{!!  str_limit($offre->intitule_sujet,50) !!}</div>
                      <div class="collapsible-body"><p>{!!  $offre->intitule_sujet !!}</p></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">queue</i>Détails et Prérequis</div>
                      <div class="collapsible-body"><p>{!!  $offre->descriptif !!}</p></div>
                    </li>

                    <li>
                      <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">local_offer</i>Keywords</div>
                      <div class="collapsible-body"><p>{!!  $offre->mots_cles !!}</p></div>
                    </li>

                    @if($offre->document_offre)
                    <li>
                    <div class="collapsible-header">Pièce jointe</div>
                    <div class="collapsible-body"><p>{!!  Html::link('storage/uploads/Stages/Offres/'.$offre->document_offre) !!}</p></div>
                    </li>
                    @endif
                  </ul>

                    @if(isset($offre->applyable))
                    @if($offre->applyable==0) 
                      <span class="new badge green" data-badge-caption="Candidature directe"></span>
                    @endif
                    @endif
                  </div>

                  <div class="card-action">
                    @if(isset($offre->applyable))
                      @if($offre->applyable==0) 
                        <a href="{{ route('monStage.show', $offre->id) }}">Voir l'offre</a>
                      @endif
                    @else
                        <a href="{{ route('monStage.postuler', $offre->id) }}">Postuler</a>
                    @endif
                    
                    @role('Admin')
                    <a href="{{ route('admin.offresDeStages.edit', $offre->id) }}" class="right btn-floating btn halfway-fab waves-effect waves-light white">
                    <i class="tiny material-icons blue-grey-text textlighten-5">edit</i></a>
                    @endrole
                  </div>
                </div>
              </div>
          @endif
        @endforeach
      @endif
    </div>
</div>