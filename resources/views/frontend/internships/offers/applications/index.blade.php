@extends('layouts.ui.app')

@section('title', 'Mes candidatures')

@section('users_buttons')
    @include(Button::home_button())
@endsection  


@section('content')

@include('components.section_title',['title' => 'Mes candidatures'])

<div class="section">

    @foreach ($applications as $application)
        @include('frontend.internships.offers.applications.partials.collection',['application' => $application]); 
    @endforeach
</div>
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection

