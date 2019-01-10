<ul id="dropdown1" class="dropdown-content">
  @include('layouts.ui_usermenulist')
</ul>
<nav class="nav-extended">
  <div class="nav-wrapper white z-depth-1">
    <div class="container">
      <div class="col s12 m12 l12">
        <a href="/" class="brand-logo left"><img src="/images/logos/logo_colors.png"></a>
        <a href="#" class="button-collapse right sidenav-trigger" data-target="mobile-demo"><i class="material-icons blue-grey-text blue-grey lighten-5">menu</i></a>
          @yield('buttons')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          @include('layouts.ui_navbarMenuList')
        </ul>
        <ul class="sidenav" id="mobile-demo">
          @include('layouts.ui_usermenulist')
        </ul>
          @yield('users_buttons')
      </div>
    </div>
  </div>
  <div class="nav-content">
      <ul class="tabs tabs-transparent white lighten-5 grey-text">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
</nav>