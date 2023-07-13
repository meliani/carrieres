@extends('layouts.ui.app')

@section('title', 'This is my title')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
{{-- Title bloc --}}}
@include('components.section_title',['title' => 'Opportunités de stages PFE'])

@include('components.pagination.pagination_wrapper',$collection=$internships)

@include('components.search_box')

@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection

