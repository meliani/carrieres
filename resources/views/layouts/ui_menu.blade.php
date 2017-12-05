@include('layouts.ui_usermenulist')

<nav>
  <div class="nav-wrapper blue-grey lighten-5 z-depth-1">
    <div class="container">
      <div class="col s12 m12 l12">
        <a href="/" class="brand-logo left"><img src="/images/logos/logo_colors.png"></a>
        <a href="#" class="button-collapse right sidenav-trigger" data-target="mobile-demo"><i class="material-icons blue-grey-text blue-grey lighten-5">menu</i></a>
          @yield('buttons')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          @include('layouts.ui_menulist')
        </ul>
        <ul class="sidenav" id="mobile-demo">
          @include('layouts.ui_menumobile')
        </ul>
      </div>
    </div>
  </div>
</nav>