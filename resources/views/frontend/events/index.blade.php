@extends('layouts.ui.app')

@section('title', 'List of events')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
{{-- Title bloc --}}}
@include('components.section_title',['title' => 'Liste des événements a venir'])
<div class="row">
    @foreach ($events as $event)
         @include('frontend.events.components.card')
    @endforeach
</div>
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
