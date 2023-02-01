<li class="{{ Request::is('offresDeStages*') ? 'active' : '' }}">
    <a href="{!! route('admin.offresDeStages.index') !!}"><i class="fa fa-briefcase"></i><span>Gestion des offres PFE</span></a>
</li><li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('backend.users.index') !!}"><i class="fa fa-users"></i><span>Utilisateurs</span></a>
</li>
<li class="{{ Request::is('applications*') ? 'active' : '' }}">
    <a href="{!! route('admin.applications.index') !!}"><i class="fa fa-check"></i><span>Candidatures</span></a>
</li><li class="{{ Request::is('reportSubmissions*') ? 'active' : '' }}">
    <a href="{!! route('admin.reportSubmissions.index') !!}"><i class="fa fa-file"></i><span>Rapports de stages</span></a>
</li>

<li class="{{ Request::is('internships*') ? 'active' : '' }}">
    <a href="{!! route('admin.internships.index') !!}"><i class="fa fa-th-list"></i><span>Déclarations de stages</span></a>
</li>

