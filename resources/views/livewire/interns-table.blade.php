@section('css')
    @livewireStyles
@endsection

<div>
    <input wire:model.debounce.300ms="search" type="text" placeholder="Rechercher des étudiants..."/>

    <ul>
        @include('backend.internships.partials.live_list')
    </ul>
</div>

@section('scripts')
    @livewireScripts
@endsection