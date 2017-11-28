@include('layouts.ui_usermenulist')

<nav>
  <div class="nav-wrapper blue-grey lighten-5">
    <a href="#" class="brand-logo center"><img src="/images/logos/logo_colors.png"></a>
    <a href="#" class="button-collapse" data-activates="mobile-demo"><i class="material-icons blue-grey-text blue-grey lighten-5">menu</i></a>
    @yield('buttons')
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      @include('layouts.ui_menulist')
    </ul>
    <ul class="side-nav" id="mobile-demo">
      @include('layouts.ui_menumobile')
    </ul>
  </div>
</nav>