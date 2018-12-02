<li class="{{ Request::is('offresDeStages*') ? 'active' : '' }}">
    <a href="{!! route('admin.offresDeStages.index') !!}"><i class="fa fa-edit"></i><span>Gestion des offres PFE</span></a>
</li><li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
</li>
<li class="{{ Request::is('applications*') ? 'active' : '' }}">
    <a href="{!! route('admin.applications.index') !!}"><i class="fa fa-edit"></i><span>Applications</span></a>
</li><li class="{{ Request::is('reportSubmissions*') ? 'active' : '' }}">
    <a href="{!! route('admin.reportSubmissions.index') !!}"><i class="fa fa-edit"></i><span>Rapports de stages</span></a>
</li>

<li class="{{ Request::is('internships*') ? 'active' : '' }}">
    <a href="{!! route('admin.internships.index') !!}"><i class="fa fa-edit"></i><span>Déclarations de stages</span></a>
</li>

