@extends('layouts.ui.app')
@section('title', '| Opportunités de stage')

@section('users_buttons')
@include(Button::home_button())
@endsection

@section('content')

@include('components.section_title', ['title' => 'Opportunités de stage'])

@include('components.pagination.pagination_wrapper', $collection = $offers)

@include('frontend.internships.offers.list')

@include('components.pagination.pagination_wrapper', $collection = $offers)
{{-- @role('Admin')
@section('floating-buttons')
@include(Button::page_action_buttons())
@endsection
@endrole --}}
@endsection