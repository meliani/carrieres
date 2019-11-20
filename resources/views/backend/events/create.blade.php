@extends('layouts.ui.app')

@section('title', 'Create an event')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
{{-- Title bloc --}}}
@include('components.section_title',['title' => 'Ajouter un evenement'])
@include('backend.events.partials.create'); 
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
