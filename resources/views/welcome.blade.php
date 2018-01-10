@extends('layouts.ui')
@section('title') welcome @endsection

@section('content')


  <div class="section no-pad-bot z-depth-1" id="index-banner">
  <img class="responsive-img sticky" src="{{ asset('images/home/relation_entreprises.jpg') }}">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">@lang('messages.welcome')</h5>
      </div>
      <div class="row center">
      </div>


    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Mon espace</h5>

            <p class="light">        
              Cet espace sécurisé est réservé aux étudiants 
              de l'INPT ayant rempli au préalable le formulaire <a href="https://docs.google.com/forms/d/e/1FAIpQLScSCtdQQnrthS9fUu7rSBO3J2e4RVDK687vUTm3lEY3gVCwwA/viewform">"Mieux vous connaître"</a> et verifié par l'administration.
            </p>
            <p class="light">
              Afin de récupérer votre mot de passe, veuillez utiliser la même adresse email renseignée et cliquer sur <a href="{{ route('password.request') }}">"redéfinir ?"</a>". 
              Vous aller recevoir un message pour réinitialiser votre login et pouvoir accéder aux offres PFE 2018.   
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">domain</i></h2>
            <h5 class="center">Les stages</h5>
            <p class="light">Le programme de formation de l’INPT 
              impose aux étudiants le passage au sein des entreprises partenaires. 
              Ceci dit, les élèves ingénieurs sont amenés à faire :</p>
              <li class="light">Stage ouvrier en première année</li>
              <li class="light">Stage Technique en deuxième année</li>
              <li class="light">Le Projet de fin d’études (PFE) en troisième année.</li>
            
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">event_seat</i></h2>
            <h5 class="center">Jeudis entreprises</h5>
            <p class="light">
            L’école organise de manière continue des visites 
            d’entreprises aux étudiants afin de leur permettre de 
            s’enquérir des réalités du monde du travail.
            </p>
            <p class=" center light">
            <a class="btn light-blue flat" href="">Planning</a>
            </p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

@endsection
