@extends('layouts.ui')

@section('title', 'This is my title')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')

@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection

