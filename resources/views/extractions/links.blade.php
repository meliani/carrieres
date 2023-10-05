<div class="container">
  {{-- list exports from Export model as materializecss cards --}}
  <div class="row">
    @foreach ($exports as $export)
    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-content">
          <span class="card-title">{{ $export->name }}</span>
          <p>{{ __($export->description) }}</p>
        </div>
        <div class="card-action">
          <a href="{{ $export->path }}">{{__('download')}} </a>
        </div>
      </div>
    </div>
    @endforeach
  

</div>