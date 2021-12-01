@extends('layouts.ui.app')

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
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=global_agreement') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Générer la convention Maroc et autres pays</a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=france_agreement') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Générer la convention France</a>
    </li>
    @else
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=mobility_global_agreement') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Générer la convention Mobilité autre pays que la france</a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=mobility_france_agreement') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Générer la convention Mobilité en France</a>
    </li>
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
