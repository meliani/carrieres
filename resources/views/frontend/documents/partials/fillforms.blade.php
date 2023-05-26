@extends('layouts.ui.app')
@section('title','| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
<div class="container">


@include('frontend.documents.partials.collections.old_docs')


<ul class="collection">
<li class="collection-item avatar">
  <i class="material-icons circle red ">playlist_add_check</i>
  <span class="title">Remplir et "valider" la déclaration de stage</span>
  <p>
    Vous devez remplir votre déclaration de stage et la valider avant de générer votre convention en PDF.
  </p>
</li>
</ul>

<ul class="collection">
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('internships/create') }} class="waves-effect waves-light btn green">
        <i class="material-icons right">save</i>Déclarer mon stage</a>
    </li>
</ul>
</div>
@endsection