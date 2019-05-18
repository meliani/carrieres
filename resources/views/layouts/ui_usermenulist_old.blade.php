@role('Admin')
<li class="{{ Request::is('admin.offresDeStages.index') ? 'active' : '' }}">
  <a href="{{ route('admin.offresDeStages.index') }}">Administration</a></li>
<li class="divider"></li>
@endrole
@can('see advisors')
<li class="{{ Request::is('Project') ? 'active' : '' }}">
  <a href="{{ url('Internship/Advising/Project') }}">Liste des PFE déclarés</a></li>
<li class="divider"></li>
@endcan
@role('Etudiant')
<li class="{{ Request::is('monStage.index') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('monStage.index') }}">Voir les offres</a></li>
<li class="{{ Request::is('internships.documents.index') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ url('student/eDocs') }}">Mes documents</a></li>
<li class="{{ Request::is('internship.create') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('internship.create') }}">Declarer mon stage</a></li>
@endrole
@guest
  <li class="{{ Request::is('login*') ? 'active' : '' }}"><a class="blue-grey-text text-darken-1" href="{{ route('login') }}">Login</a></li>
<li class="divider"></li>
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