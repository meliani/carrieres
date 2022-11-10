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
            {!! $offer->organization_name !!}
        </h5>
        </div>
        @if($offer->internship_location)
        <div class="collapsible-body">
        <p><i class="small material-icons blue-grey-text textlighten-5">place</i>
            {!! $offer->internship_location !!}
        </p>
        </div>
        @endif
    </li>
    @if($offer->project_title)
    <li>
        <div class="collapsible-header"><i
            class="small material-icons blue-grey-text textlighten-5">subject</i>{!!
        str_limit($offer->project_title,50) !!}</div>
        <div class="collapsible-body">
        <p>{!! $offer->project_title !!}</p>
        </div>
    </li>
    @endif
    @if($offer->project_details)
    <li>
        <div class="collapsible-header"><i
            class="small material-icons blue-grey-text textlighten-5">queue</i>Détails et Prérequis</div>
        <div class="collapsible-body">
        <p>{!! $offer->project_details !!}</p>
        </div>
    </li>
    @endif
    @if($offer->keywords)
    <li>
        <div class="collapsible-header"><i
            class="small material-icons blue-grey-text textlighten-5">local_offer</i>Keywords</div>
        <div class="collapsible-body">
        <p>{!! $offer->keywords !!}</p>
        </div>
    </li>
    @endif
    @if($offer->attached_file)
    <li>
        <div class="collapsible-header">Pièce jointe</div>
        {{-- <div class="collapsible-body">
        <p>{!!
            Html::link(config('school.current.time_limits.max_debut_pfe')."storage/uploads/internships/offers/submited_files/".$offer->document_offre,"Voir
            le document") !!}</p>
        </div> --}}
        {{-- <div class="collapsible-body">
        <p>{!!
            Html::link(asset('storage/uploads/internships/offers/submited_files/'.$offer->document_offre),"Voir le
            document") !!}</p>
        </div> --}}
        {{-- <div class="collapsible-body">
        <p>{!! Storage::disk('interOffersDocs')->download($offer->document_offre); !!}</p>
        </div> --}}
        <div class="collapsible-body">
        <p>{!! Html::link(Storage::disk('interOffersDocs')->url($offer->attached_file),"Consulter le fichier
            joint") !!}</p>
        </div>
    </li>
    @endif
    @if($offer->responsible_email)
    <li>
        <div class="collapsible-header"><i
            class="small material-icons blue-grey-text textlighten-5">local_offer</i>Contact direct</div>
        <div class="collapsible-body">
        <p>{!! $offer->responsible_fullname !!} / {!! $offer->responsible_occupation !!}</p>
        <p>{!! $offer->responsible_email !!}</p>
        </div>
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

    @else
    <a href="{{ route('applications.create', ['offer'=>$offer->id]) }}">Postuler</a>
    @endif
    @endif

    @role('Admin')
    <a href="{{ route('offers.edit', $offer->id) }}"
    class="right btn-floating btn halfway-fab waves-effect waves-light white">
    <i class="tiny material-icons blue-grey-text textlighten-5">edit</i></a>
    @endrole
</div>
</div>