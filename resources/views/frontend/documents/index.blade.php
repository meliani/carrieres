@extends('layouts.ui.app')

@section('title','| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
<div class="container">
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
    @if(!auth()->user()->people->is_mobility)
   @includeWhen(auth()->user()->people->internship->pays<>'France','frontend.documents.partials.buttons.global')
   @includeWhen(auth()->user()->people->internship->pays=='France','frontend.documents.partials.buttons.france')
    @else
    @includeWhen(auth()->user()->people->internship->pays<>'France','frontend.documents.partials.buttons.mobility')
    @includeWhen(auth()->user()->people->internship->pays=='France','frontend.documents.partials.buttons.mobility_france')
    @endif
    <li class="collection-item avatar">
        <i class="material-icons circle red">delete</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=delete') }} 
    class="waves-effect waves-light red btn" onclick="return confirm('Vos anciens documents seront supprimés \nEtes vous sure ?')">
        <i class="material-icons right">save</i>Liberer l'espace et partir du zéro</a>
    </li>

    

  </ul>
</div>

@endsection
