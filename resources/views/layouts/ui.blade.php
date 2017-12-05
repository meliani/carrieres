<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carrieres.inpt.ac.ma') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/google/material_icons.css">
    <link href="{{ asset('css/materialize.min.css') }}" media="screen,projection" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" media="screen,projection" rel="stylesheet">
</head>
<body>
<header>
<!--Main Navigation-->
  @include('layouts.ui_menu')
</header>

<main>
  @yield('content')
</main>

<footer class="page-footer blue-grey lighten-3 blue-grey-text text-darken-3 z-depth-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5>"Nous accompagnons vos premiers pas vers l’entreprise"</h5>
                <p>L'équipe de la direction adjointe des stages et relations entreprises vous accompagne dans vos premiers pas vers l'entreprise. 
Votre carrière se construit dès aujourd'hui, nous sommes là pour vous aider à mettre en valeur vos atouts pour bien la démarrer.</p>  
            </div>
              <div class="col l4 offset-l2 s12">
                <h5>Liens</h5>
                <ul>
                  <li><a href="#!">Soumettre une proposition de stage.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey lighten-1">
            <div class="container">
            © 2017 DASRE INPT
            <a class="grey-text text-lighten-5 right" href="#!">Contact</a>
            </div>
          </div>
        </footer>
    <!-- Scripts -->
    <script src="js/jquery-3.2.1.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="js/jquery-3.2.1.js"><\/script>'); }
    </script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    
</body>
</html>
