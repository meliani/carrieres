@extends('layouts.ui')
  
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
              <th width="10%">Etudiant</th>
              <th width="10%">Raison sociale</th>
              <th width="10%">localisation</th>
              <th width="10%">Encadrant externe</th>
              <th width="20%">Titre du PFE</th>
              <th width="10%">Affecté le</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($encadrements as $pfe)
            <tr>
              <td>{{ $pfe->studentName }}</td>
              <td>{{ $pfe->raison_sociale }}</td>
              <td>{{ $pfe->ville }}, {{ $pfe->pays }}</td>
              <td>
                <ul>
                  <li>
                    {{ $pfe->encadrant_ext_nom }}
                    {{ $pfe->encadrant_ext_prenom }}
                  </li>
                  <li>{{ $pfe->encadrant_ext_tel }}</li>
                  <li>{{ $pfe->encadrant_ext_mail }}</li>
                </ul>
                </td>
              <td>{{ $pfe->intitule }}</td>
              <td>{{ $pfe->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


    <div class="center">
        {{ $encadrements->links('vendor.pagination.default') }}
    </div>
@endsection
