@extends('layouts.ui')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection       
@section('content')
    <div class="row center">
        <h4 class="header col s12 light">mes extractions</h4>
    </div>
@include('extractions.links')

@endsection
