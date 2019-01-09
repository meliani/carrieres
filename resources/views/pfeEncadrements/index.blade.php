@extends('layouts.ui')


@section('content')
<a href="{!! URL::to('pfeEncadrements/downloadExcel/xlsx') !!}" class="waves-effect waves-teal btn">Exporter vers excel</a>

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Liste des encadrements</h4>
        </div>

    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>


    @include('pfeEncadrements.liste')


    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>
@endsection
