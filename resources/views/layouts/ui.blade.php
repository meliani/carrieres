<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('messages.titlePrefix') @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/google/material_icons.css') }}">
    <link href="{{ asset('css/materialize.min.css') }}" media="screen,projection" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" media="screen,projection" rel="stylesheet">
    @yield('css')
</head>
<body>
<header>
<!--Main Navigation-->
  @include('layouts.ui_navbar')
</header>

<main>
  @yield('content')
</main>

<footer class="page-footer light-blue darken-1 white-text z-depth-1">
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
                  <li><a class="light-blue-text text-lighten-5" href="#!">Conditions d'utilisation.</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright light-blue darken-3 z-depth-2">
            <div class="container">
                <span>{{ Tracker::onlineUsers()->count() }} Authentificated users online</span>
                <time datetime="00:00:00 | date: '2019'">&copy; {{ date('Y')}} DASRE INPT</time>

            <a class="light-blue-text text-lighten-5 right" href="#!">Contact</a>
            </div>
          </div>
        </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script>if (!window.jQuery) { document.write('<script src="{{ asset('js/jquery-3.2.1.js') }}"><\/script>'); }
    </script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
  @yield('scripts')

</body>
</html>
