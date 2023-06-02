@extends('layouts.ui.app')
@section('title')| {{ $title }} @endsection
@section('css')
{{-- @vite('resources/css/app.css') --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@endsection
@push('endofhead')
@livewireStyles
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                {{ $title }}
            </h3>
        </div>
        @include ('errors.list')

        </div>
    </div>
</div>
<div>
    <livewire:defenses-calendar/>
</div>
@endsection  

@push('endofbody-scripts')
@livewireScripts
@liveCalendarScripts
@endpush
