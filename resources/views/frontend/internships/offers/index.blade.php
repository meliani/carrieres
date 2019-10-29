@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')

    <div class="row center">
        <h4 class="header col s12 light">Offres de stages</h4>
    </div>

    @include('components.pagination.pagination_wrapper',$paginate=$offers)

    @include('frontend.internships.offers.list')

    @include('components.pagination.pagination_wrapper',$paginate=$offers)

@endsection
