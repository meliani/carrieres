@role('Admin')
<li><a href="{{ route('users.index') }}">Adminisration</a></li>
<li class="divider"></li>
@endrole

@role('Etudiant')
<li class="{{ Request::is('monStage.index') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('monStage.index') }}">Voir les offres</a></li>
<li class="{{ Request::is('monStage.guide') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('monStage.edocs') }}">Mes documents</a></li>
<li class="{{ Request::is('monStage.edocs') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('monStage.guide') }}">Guide</a></li>
@endrole
@guest
  <li class="{{ Request::is('login*') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('login') }}">Login</a></li>
@else
<li><a href="{{ route('logout') }}"
    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
    Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    </form>
</li>
@endif
