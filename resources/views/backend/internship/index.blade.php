@extends('layouts.ui')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')

    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">
            Liste des encadrements
        </h4>
    </div>
    @include('frontend.partials.pagination_wrapper',$paginate=$trainees)

    @include('backend.internship.partials.search_box')

    @include('backend.internship.partials.list')

    @include('frontend.partials.pagination_wrapper',$paginate=$trainees)

@endsection
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
