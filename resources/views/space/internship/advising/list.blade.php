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
          <th width="10%">Jury</th>            
          @endcan
      </tr>
    </thead>

    <tbody>
      @foreach ($encadrements as $pfe)
      <tr>
        <td><div class="">{{ $pfe->user->name }}</div>
          @if ($pfe->user->people->option_text)
          <span class="new badge blue lighten-3 white-text" data-badge-caption="{{ ( !empty($pfe->user->people->option_text)? $pfe->user->people->option_text:'' ) }}"></span>
          @endif
          
        </td>
        <td>{{ $pfe->raison_sociale }}</td>
        <td class="sub">{{  str_limit($pfe->intitule, 100) }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>{{ \Carbon\Carbon::parse($pfe->created_at)->format('d M Y') }}</td>   
         <td class="center">
           @if(isset($pfe->adviser->adviser1))
            {{ $pfe->adviser->adviser1['name']}}
          @else
            <a href={{ route('Project.create', ['pfe_id' => $pfe->id,'advisor' => '1' ]) }}><i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="center">
          @if(isset($pfe->adviser->adviser2))  
            {{ $pfe->adviser->adviser2['name']}}
          @else
            <a href={{ route('Project.create', ['pfe_id' => $pfe->id,'advisor' => '2' ]) }}><i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="center">
          @include('space.internship.advising.jury',$pfe)
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>