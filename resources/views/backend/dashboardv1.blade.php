{{-- Dashboard V1 --}}

@extends('layouts.ui.app')

@section('title', ' | ' . __('Administration Dashboard'))

@section('users_buttons')
    @include(Button::user_buttons())
@endsection

@section('content')
    <x-dashboard>
        <livewire:time-weather-tile 
        position="a1:a2" />
        <x-dashboard-tile 
        position="a2:a2">
            <h1>{{ __('Top 10 Intenrships Over Time (by Month)') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsOverTimeChart::class }}" 
        position="a3:a4" />
        <x-dashboard-tile 
        position="a5:a5">
            <h1>{{ __('Total Intenrships per program') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsTotalsChart::class }}" 
        position="a6:a9" />
        <x-dashboard-tile 
        position="b1:b1">
            <h1>{{ __('Top 10 cities') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCityChart::class }}" 
        position="b2:b9" />
        <x-dashboard-tile 
        position="c1:c1">
            <h1>{{ __('Top 10 countries') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCountryChart::class }}" 
        position="c2:c4" />
        <x-dashboard-tile 
        position="c5:c5">
            <h1>{{ __('Top 10 Intenrships per organization') }}</h1>
        </x-dashboard-tile>
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerOrganizationChart::class }}" 
        position="c6:c9" />
    </x-dashboard>
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
