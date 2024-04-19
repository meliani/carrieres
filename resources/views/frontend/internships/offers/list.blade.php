@section('buttons')
{{-- @role('Admin')
<a href="{{ route('offers.create') }}" class="left btn-floating btn-large halfway-fab waves-effect waves-light white">
  <i class="tiny material-icons blue-grey-text textlighten-5">add</i></a>
@endrole --}}
@endsection
{{-- dd($offersDeStages) --}}
@if(!isset($offers))
<div class="col s12 m12 left-align">
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
  <div class="row">
    @foreach ($offers as $offer)
    <div class="left-align col s12 m6 l4 xl4">
      @include('frontend.internships.offers.components.internship_card')
    </div>
    @endforeach
    @endif
  </div>
</div>