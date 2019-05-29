@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')

    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">
            Liste des encadrements
        </h4>
    </div>
    @include('components.pagination.pagination_wrapper',$paginate=$internships)

    @include('components.search_box')

    @include('backend.internships.partials.list')

    @include('components.pagination.pagination_wrapper',$paginate=$internships)

@endsection
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
