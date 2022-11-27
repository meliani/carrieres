

<div>
    <input wire:model.debounce.300ms="search" type="text" placeholder="Rechercher des étudiants..."/>

    <ul>
        @include('backend.internships.partials.live_list')
        {{-- to add for next upgrade fev 2021 --}}
        {{-- @each('view.name', $jobs, 'job', 'view.empty') --}}

    </ul>
</div>

