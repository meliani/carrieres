@extends('layouts.ui')
  
@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Liste des encadrements</h4>
        </div>

    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>


    @include('mesEncadrements.liste')


    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>
@endsection
