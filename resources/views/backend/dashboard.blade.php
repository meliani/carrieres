@extends('layouts.ui.app')

@section('title', 'This is my title')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')
    @include('backend.partials.status')

    <div class="container">
        <div class="row">
            @include('backend.partials.cards.internships')
            @include('backend.partials.cards.students')

        </div>
    </div>    
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection