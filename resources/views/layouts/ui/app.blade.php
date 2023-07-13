<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('messages.titlePrefix') @yield('title')</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/google/material_icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/materialize.css') }}" media="screen,projection" rel="stylesheet"> --}}
    <link href="{{ mix('css/app.css') }}" media="screen,projection" rel="stylesheet">

    {{-- <link href="{{ asset('css/materialert.css') }}" media="screen,projection" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" media="screen,projection" rel="stylesheet">
    @yield('css')
    @yield('page-css')
    @stack('endofhead')
</head>

<body>
    <header>
        <!--Main Navigation-->
        @include('layouts.ui.navbar')
    </header>

    <main>
        @include('partials.messages.messages')
        @yield('content')
    </main>

    <footer class="page-footer light-blue darken-1 white-text z-depth-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5>"Nous accompagnons vos premiers pas vers l’entreprise"</h5>
                    <p>L'équipe de la direction adjointe des stages et relations entreprises vous accompagne dans vos
                        premiers pas vers l'entreprise.
                        Votre carrière se construit dès aujourd'hui, nous sommes là pour vous aider à mettre en valeur
                        vos atouts pour bien la démarrer.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5>Liens</h5>
                    <ul>
                        <li><a class="light-blue-text text-lighten-5" href="#!">Conditions d'utilisation</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright light-blue darken-3 z-depth-2">
            <div class="container">

                <time datetime="00:00:00 | date: '2019'">&copy; 2016 - {{ date('Y') }} DASRE INPT</time>

                <a class="light-blue-text text-lighten-5 right" href="#!">Contact</a>
            </div>
        </div>
    </footer>
    @yield('floating-buttons')

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/jquery-3.2.1.js') }}"></script> --}}
    {{-- <script src="{{ mix('js/materialize.js') }}"></script> --}}
    <script src="{{ asset('js/init.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
    @yield('page-script')

    {{-- some scripts related to livewire and other javascript/alpine on page manipulations
    can be stacked using @push directive in blade files
    --}}

    @stack('endofbody-scripts')
</body>

</html>
