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
  <h5>Stages disponibles</h5>
  <div class="row">

@foreach ($offresDeStages as $offre)
  @if($offre->is_valid)
        <div class="offre col s12 m4">
          <div class="card hoverable">
            <div class="card-content">
            <img src="/images/badges/pfe.svg" width="64" height="64">
            <ul class="collapsible">
              <li class="active">
                <div class="collapsible-header"><i class="mdi-av-web"></i>{{  str_limit($offre->intitule_sujet,10) }}</div>
                <div class="collapsible-body"><p>{{  $offre->intitule_sujet }}</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-editor-format-align-justify"></i>Détails et Prérequis</div>
                <div class="collapsible-body"><p>{{  $offre->descriptif }}</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-av-play-shopping-bag"></i>Entreprise & lieu</div>
                <div class="collapsible-body">
                  <p>{{  $offre->raison_sociale }}</p>
                  <p>{{  $offre->lieu_de_stage }}</p>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-editor-insert-comment"></i>Keywords</div>
                <div class="collapsible-body"><p>{{  $offre->mots_cles }}</p></div>
              </li>

              @if($offre->document_offre)
              <li>
              <div class="collapsible-header"><i class="mdi-editor-insert-comment"></i>Pièce jointe</div>
              <div class="collapsible-body"><p>{{  Html::link($offre->document_offre) }}</p></div>
              </li>
              @endif
            </ul>

            </div>
            <div class="card-action">
              <a href="{{ route('monStage.postuler', $offre->id) }}">Postuler</a>
            </div>
          </div>
        </div>
    @endif
  @endforeach
@endif
      </div>
</div>