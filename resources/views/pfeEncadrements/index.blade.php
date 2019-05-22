@extends('layouts.ui.app')


@section('content')
<a href="{!! URL::to('pfeEncadrements/downloadExcel/xlsx') !!}" class="waves-effect waves-teal btn">Exporter vers excel</a>

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Liste des encadrements</h4>
        </div>

    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>

    {!! Form::open(['method'=>'GET','url'=>'pfeEncadrements','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="s" placeholder="Chercher par Etudiant...">
        </div>
    {!! Form::close() !!}

    @include('pfeEncadrements.liste')

    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>
@endsection
