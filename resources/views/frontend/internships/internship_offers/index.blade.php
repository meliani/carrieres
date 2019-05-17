@extends('layouts.ui')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')

    <div class="row center">
    <h4 class="header col s12 light">Offres de stages</h4>
    </div>

    @include('frontend.partials.pagination_wrapper',$paginate=$offres)



@include('frontend.internships.internship_offers.list')

@include('frontend.partials.pagination_wrapper',$paginate=$offres)



@endsection
