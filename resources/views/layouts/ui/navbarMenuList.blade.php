@guest
  <li class="{{ Request::is('login*') ? 'active' : '' }}">
    <a class="blue-grey-text text-darken-1" href="{{ route('login') }}">
      Login</a></li>
@else

  <li><a class='dropdown-trigger blue-grey-text text-darken-1' 
    href="#" data-target ='dropdown1'>{{ Auth::user()->name }}
    <i class="material-icons right">arrow_drop_down</i></a></li>

@endguest