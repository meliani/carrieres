@extends('layouts.ui.app')

@section('title','| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
<div class="container">
  <div class="row center">
    <h4 class="header light center blue-text text-lighten-1">Générer la convention de stage</h4>
    </div>

  <ul class="collection">
    <li class="collection-item avatar">
  @if(isset($documents))      
    <i class="material-icons circle blue">folder</i>
      <span class="title">Mes documents de stage</span>
      <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
      @foreach ($documents as $doc)
      <p>
        <a href="{{ $doc->getUrl() }}">
          {{ $doc->name }}
          
        </a>
      </p>
      @endforeach
    @endif
    </li>
    @if(auth()->user()->people->is_mobility<>1)
   @includeWhen(auth()->user()->people->internship->pays<>'France','frontend.documents.partials.buttons.global')
   @includeWhen(auth()->user()->people->internship->pays=='France','frontend.documents.partials.buttons.france')
    @elseif(auth()->user()->people->is_mobility==1)
    @includeWhen(auth()->user()->people->internship->pays<>'France','frontend.documents.partials.buttons.mobility')
    @includeWhen(auth()->user()->people->internship->pays=='France','frontend.documents.partials.buttons.mobility_france')
    @endif


    

  </ul>
</div>

@endsection
