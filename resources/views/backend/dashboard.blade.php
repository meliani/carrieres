@extends('layouts.ui.app')

@section('title', ' | ' . __('Administration Dashboard'))

@section('users_buttons')
    @include(Button::user_buttons())
@endsection

@section('content')
    <x-dashboard>
        <livewire:time-weather-tile position="a1:a3" />
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsOverTimeChart::class }}" position="a3:a5" />
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsTotalsChart::class }}" position="a6:a9" />
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCityChart::class }}" position="b1:b9" />
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerCountryChart::class }}" position="c1:c3" />
        <livewire:chart-tile chartFactory="{{ App\Charts\InternshipsPerOrganizationChart::class }}" position="c4:c9" />
    </x-dashboard>
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
