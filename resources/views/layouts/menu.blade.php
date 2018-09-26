<li class="{{ Request::is('offresDeStages*') ? 'active' : '' }}">
    <a href="{!! route('admin.offresDeStages.index') !!}"><i class="fa fa-edit"></i><span>Offres De Stages</span></a>
</li><li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
</li>
<li class="{{ Request::is('applications*') ? 'active' : '' }}">
    <a href="{!! route('admin.applications.index') !!}"><i class="fa fa-edit"></i><span>Offers tracking</span></a>
</li><li class="{{ Request::is('reportSubmissions*') ? 'active' : '' }}">
    <a href="{!! route('admin.reportSubmissions.index') !!}"><i class="fa fa-edit"></i><span>Report Submissions</span></a>
</li>

