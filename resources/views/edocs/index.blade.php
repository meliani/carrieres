@extends('layouts.ui')

@section('content')

<div class="container">
  <ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Recommendations</span>
      <p>
        <a href="Files/Lettres%20de%20Recommandation.pdf">
          Télécharger votre Lettre de Recommandations
        </a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Formulaire d'encadrement</span>
      <p>
        <a href="Files/Autres/Formulaire encadrement & validation PFE 2018.docx">
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
            <li><a href="Files/Conventions/1%20-%20Conv%20type%20st%20au%20Maroc%20&%20autres%20pays%20que%20la%20France.doc">Convention de stages type Maroc et autres pays</a></li>
            <li><a href="Files/Conventions/2%20-%20Conv%20type%20st%20en%20France.doc">Convention de stages type France</a></li>
            <li><a href="Files/Conventions/4%20-%20Conv%20type%20T%C3%A9l%C3%A9com%20ParisTech.doc">Convention de stages type Télécom ParisTech</a></li>
            <li><a href="Files/Conventions/3%20-%20Conv%20type%20TELECOM%20SudParis.doc">Convention de stages type Télécom SudParis</a></li>
          </ul>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>


    

  </ul>
</div>

@endsection
