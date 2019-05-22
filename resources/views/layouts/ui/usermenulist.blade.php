
@role('Admin')
<?php $menu = App\Models\Core\Menu::active()->admin()->get() ?>
@foreach ($menu as $item)
<li class="{!! Request::is($item->url) ? 'active' : '' !!}">
<a href="{!! url($item->url) !!}">{{ $item->name }}</a></li>
@endforeach
<li class="divider"></li>
@endrole
@can('see advisors')
<?php $menu = App\Models\Core\Menu::active()->prof()->get() ?>
@foreach ($menu as $item)
<li class="{!! Request::is($item->url) ? 'active' : '' !!}">
<a href="{!! url($item->url) !!}">{{ $item->name }}</a></li>
@endforeach
<li class="divider"></li>
@endcan
@role('Etudiant')
<?php $menu = App\Models\Core\Menu::active()->student()->get() ?>
@foreach ($menu as $item)
<li class="{!! Request::is($item->url) ? 'active' : '' !!}">
<a href="{!! url($item->url) !!}">{{ $item->name }}</a></li>
@endforeach
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