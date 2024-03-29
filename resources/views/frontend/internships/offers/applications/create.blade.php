@extends('layouts.ui.app')

@section('content')

@section('buttons')
  @role('Admin')
  <a href="{{ route('offers.create') }}" class="left btn-floating btn-large halfway-fab waves-effect waves-light white">
  <i class="tiny material-icons blue-grey-text textlighten-5">add</i></a>
  @endrole
@endsection
@if(!isset($offer))
<div class="offre col s12 m12">
  <div class="card">
    <div class="card-content">
    Something wrong.
    </div>
    <div class="card-action">
      <a href="#">Contact Administrator</a>
    </div>
  </div>
</div>
@else
<div class="section">
    @include('components.section_title',['title' => 'Postuler pour cette offre de stage PFE'])
  <div class="row">
        <div class="offre col s12 m5">
          <div class="card hoverable">
            <div class="card-content">
            <img src="/images/badges/pfe.svg" width="64" height="64">
            <ul class="collapsible">
              <li class="active">
				<li>
                <div class="collapsible-header">
                  <h5 class='header5 blue-grey-text textlighten-5'>
                    <i class="small material-icons blue-grey-text textlighten-5">business</i>
                    {!!  $offer->organization_name !!}</h5></div>
                <div class="collapsible-body"><p><i class="small material-icons blue-grey-text textlighten-5">place</i> 
                  {!! $offer->internship_location ?: "No Data" !!}
                </p>
                </div>
				</li>
				<li>
                <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">subject</i><h6 class='header5'>
                  {!!  str_limit($offer->project_title,50) !!}</h6></div>
                <div class="collapsible-body"><p>{!!  $offer->project_details !!}</p></div>
              </li>

              <li>
                <div class="collapsible-header"><i class="small material-icons blue-grey-text textlighten-5">local_offer</i>Keywords</div>
                <div class="collapsible-body"><p>{!!  $offer->keywords !!}</p></div>
              </li>

              @if($offer->attached_file)
              <li>
              <div class="collapsible-header">Pièce jointe</div>
              <div class="collapsible-body"><p>{!!  Html::link($offer->attached_file,"Voir le document") !!}</p></div>
              </li>
              @endif
            </ul>

            </div>
        </div>
		</div>
@endif
{!! Form::open(['action' => ['Frontend\Internship\internshipApplicationController@store', 'offer'=>$offer], 'files' => true]) !!}

<div class="offre col s12 m7">
<div class="card-panel">
    <div class="card-content">
        <!-- Nom Responsable Field -->
        <div class = "row">
          <!-- Document Field -->
          <div class = "input-field col s12 m9 right">
            <div class="file-field input-field">
              <div class="btn right">
                <span>Parcourir</span>
                {!! Form::file('file_cv') !!}
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" required type="text" placeholder="Mon CV">
              </div>
            </div>
          </div>
        </div>  
        <div class = "row">
          <!-- Document Field -->
          <div class = "input-field col s12 m9 right">
            <div class="file-field input-field">
              <div class="right btn">
                  <span>Parcourir</span>
                  {!! Form::file('file_cover_letter') !!}
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" required type="text" placeholder="Letttre de  motivation">
              </div>
            </div>
          </div>
        </div>  


    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>
{!! Form::close() !!}


    </div>


</div>


@endsection