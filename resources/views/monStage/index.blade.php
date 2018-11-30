@extends('layouts.ui')

@section('users_buttons')
<ul class="right hide-on-med-and-down">
        <li>
            <a class="waves-effect tooltipped" data-position="bottom" data-delay="50" data-tooltip="trier par date" href="{{ route('monStage.index', 'Date') }}">
            <i class="small material-icons">date_range</i>
            </a>
        </li>
        <li>
            <a class="waves-effect tooltipped" data-position="bottom" data-delay="50" data-tooltip="trier par entreprise" href="{{ route('monStage.index', 'Date') }}" >
            <i class="small material-icons">domain</i>
            </a>
        </li>
    <ul>
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
