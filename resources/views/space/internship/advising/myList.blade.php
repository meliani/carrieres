@extends('layouts.ui.app')

@section('content')
    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Mes encadrements</h4>
    </div>

    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>

    <div class="container col s12 m12">
        <table class="responsive-table highlight scale-transition scale-in">
            <thead>
                <tr>
                    <th width="20%">Titre du PFE</th>
                    <th width="10%">Affecté le</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($encadrements as $pfe)
                    <tr>
                        <td>{{ $pfe->title }}</td>
                        <td>{{ $pfe->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>
@endsection
