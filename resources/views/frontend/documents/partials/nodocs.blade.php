@extends('layouts.ui.app')

@section('content')
<div class="container">

<ul class="collection">
<li class="collection-item avatar">
        <i class="material-icons circle">folder</i>
        <span class="title">Les documents de stage</span>
        <p>
          Vous n'avez pas aucun document de stage. </br>Utilisez le bouton ci dessous pour générer vos premiers documents.
        </p>

</li>
</ul>
<ul class="collection">
    <li class="collection-item avatar">
        <i class="material-icons circle">sync</i>
    <a href={{ url('students/myDocuments?action[]=render&action[]=global_agreement') }} class="waves-effect waves-light btn">
        <i class="material-icons right">save</i>Generer les documents</a>
    </li>
</ul>
</div>
@endsection