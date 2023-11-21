{{-- Dashboard V2 --}}

@extends('layouts.ui.app')
@section('title', ' | ' . __('Administration Dashboard'))

@section('users_buttons')
    @include(Button::user_buttons())
@endsection

@section('content')
    <x-dashboard>
        {{-- <livewire:time-weather-tile 
        position="a1:a2" /> --}}
        <x-dashboard-tile position="a1:a1">
            <h1>{{ __('Internships per stream') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerStreamChart::class }}" position="a2:a4" />
        <x-dashboard-tile position="a5:a5">
            <h1>{{ __('Internships per city') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCityChart::class }}" position="a6:a10" />
        <x-dashboard-tile position="b1:b1">
            <h1>{{ __('Internships per country') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCountryChart::class }}" position="b2:b5" />
        <x-dashboard-tile position="b6:b6">
            <h1>{{ __('Internships keywords') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerKeywordChart::class }}" position="b7:b10" />
        <x-dashboard-tile position="c1:c1">
            <h1>{{ __('Internships per Duration') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerDurationChart::class }}" position="c2:c5" />
        <x-dashboard-tile position="c6:c6">
            <h1>{{ __('Internships per organization') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerOrganizationChart::class }}" position="c7:c10" />

    </x-dashboard>
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())

@endsection
