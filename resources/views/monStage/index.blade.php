@extends('layouts.ui')

@section('users_buttons')
    @include('partials.buttons.buttons_wrapper')
@endsection

@section('content')

    <div class="row center">
    <h4 class="header col s12 light">Offres de stages PFE</h4>
    </div>

<div class="center">
    {{ $offres->links('vendor.pagination.default') }}
</div>


@include('monStage.liste')


<div class="center">
    {{ $offres->links('vendor.pagination.default') }}
</div>
@endsection
