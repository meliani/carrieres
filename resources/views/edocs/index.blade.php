@extends('layouts.ui')

@section('content')

<div class="container">
  <ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Recommendations</span>
      <p>
        <a href="#">
          Télécharger votre Lettre de Recommandations
        </a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Formulaire d'encadrement</span>
      <p>
        <a href="#">
          Télécharger le formulaire d'encadrement
        </a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Convention</span>
      <p>
          <ul>          
            <li><a href="#">Convention de stages type Maroc et autres pays</a></li>
            <li><a href="#">Convention de stages type France</a></li>
            <li><a href="#">Convention de stages type Télécom ParisTech</a></li>
            <li><a href="#">Convention de stages type Télécom SudParis</a></li>
          </ul>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>


    

  </ul>
</div>

@endsection
