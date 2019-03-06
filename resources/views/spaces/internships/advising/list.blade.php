<div class="container col s12 m12">
  <table class="responsive-table highlight scale-transition scale-in">
    <thead>
      <tr>
          <th width="20%">Nom et prénom</th>
          <th width="10%">Entreprise</th>
          <th width="35%">Titre du PFE</th>
          <th width="10%">Date de déclaration</th>
          <th width="10%">Encadrant 1</th>   
          <th width="10%">Encadrant 2</th>   
          @can('edit advisors')
          @endcan
      </tr>
    </thead>

    <tbody>
      @foreach ($encadrements as $pfe)
      <tr>
        <td><div class="">{{ $pfe->student_name }}</div>
          @if ($pfe->option_text)
          <span class="new badge blue lighten-3 white-text" data-badge-caption="{{ ( !empty($pfe->option_text)? $pfe->option_text:'' ) }}"></span>
          @endif
          
        </td>
        <td>{{ $pfe->raison_sociale }}</td>
        <td class="sub">{{  str_limit($pfe->intitule, 100) }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>{{ \Carbon\Carbon::parse($pfe->created_at)->format('d M Y') }}</td>   
         <td class="center">
            <a href={{ route('pfeEncadrements.create', ['pfe_id' => $pfe->id]) }}><i class="tiny material-icons">add</i></a>

          </td>
          <td class="center">
            <a href={{ route('pfeEncadrements.create', ['pfe_id' => $pfe->id]) }}><i class="tiny material-icons">add</i></a>
          </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>