<li class="{{ Request::is('offresDeStages*') ? 'active' : '' }}">
    <a href="{!! route('admin.offresDeStages.index') !!}"><i class="fa fa-edit"></i><span>Offres De Stages</span></a>
</li><li class="{{ Request::is('postulers*') ? 'active' : '' }}">
    <a href="{!! route('admin.postulers.index') !!}"><i class="fa fa-edit"></i><span>Postulers</span></a>
</li>

