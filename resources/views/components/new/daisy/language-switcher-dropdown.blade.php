<div class="flex-none">

    <div class="dropdown dropdown-end">
        <label class="btn btn-ghost btn-circle" tabindex="0">
            <div class="indicator">
                {{ $current_locale }}
            </div>
        </label>
        <ul class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52" tabindex="0">
            @foreach ($available_locales as $locale_name => $available_locale)

                    <li><a href="language/{{ $available_locale }}">
                            {{ $locale_name }}
                        </a></li>
            @endforeach
        </ul>
    </div>
</div>
