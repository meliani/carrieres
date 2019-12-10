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
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=convention') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Generer la convention Maroc et autres pays</a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=convention_pfe_france') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Generer la convention France</a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=convention_pfe_mobilite_autre') }} class="waves-effect waves-light btn">
      <i class="material-icons right">save</i>Generer la convention Mobilité Autre pays que la france</a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle red">delete</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=convention&action[]=delete') }} 
    class="waves-effect waves-light red btn" onclick="return confirm('Vos anciens documents seront supprimés \nEtes vous sure ?')">
        <i class="material-icons right">save</i>Generer les documents et supprimer les anciens</a>
    </li>

    

  </ul>
</div>

@endsection
