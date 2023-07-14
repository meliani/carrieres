@extends('layouts.ui.app')
@section('title', 'Stages et soutenances')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Soumission de stages</h4>
        </div>

        @include('components.pagination.pagination_wrapper',$collection=$students)
        @include('components.search_box')

    @include('backend.internships.reports.partials.list')


        @include('components.pagination.pagination_wrapper',$collection=$students)

@endsection
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
