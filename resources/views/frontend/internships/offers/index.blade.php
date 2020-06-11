@extends('layouts.ui.app')
@section('title', '- Opportunités de stages')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')

    @include('components.section_title',['title' => 'Opportunités de stages'])

    @include('components.pagination.pagination_wrapper',$paginate=$offers)

    @include('frontend.internships.offers.list')

    @include('components.pagination.pagination_wrapper',$paginate=$offers)

@endsection
