@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection       
@section('content')
    <div class="row center">
        <h4 class="header col s12 light"> {{__('Platform databases export')}} </h4>
    </div>
@include('extractions.links')
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
@endsection
