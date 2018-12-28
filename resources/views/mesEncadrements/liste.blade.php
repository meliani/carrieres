<div class="container col s12 m12">
  <table class="responsive-table highlight scale-transition scale-in">
    <thead>
      <tr>
          <th width="20%">Nom et prénom</th>
          <th width="10%">Option</th>
          <th width="10%">Entreprise</th>
          <th width="30em">Titre du PFE</th>
          <th width="20%">Date de déclaration</th>
          <th width="20%">Encadrants/Examinateurs</th>   
          @can('edit advisors')
          <th width="5%">Ajouter Encadrant / Examinateur</th>   
          @endcan
      </tr>
    </thead>

    <tbody>
      @foreach ($encadrements as $pfe)
      <tr>
        <td>{{ $pfe->name }}</td>
        <td>{{ $pfe->option_text }}</td>
        <td>{{ $pfe->raison_sociale }}</td>
        <td class="sub">{{  str_limit($pfe->intitule, 100) }}</td>
         {{-- Limit teaser to 100 characters --}}
         <td>{{ str_limit($pfe->created_at,10) }}</td>   
         <td>
          @if ($pfe->nbr_advisors>0)
          <ul class="small collection">
           @foreach ($encadrants as $advisor)
            @if ($pfe->id==$advisor->id)
              <li class="collection-item light-blue-text text-lighten-1">{{ str_limit($advisor->name,17) }}
              <span class="new badge blue" data-badge-caption="{{  str_limit($advisor->created_at, 10) }}"></span>
            </li>
            @endif
           @endforeach
          </ul>
          @endif
          </td>
        @can('edit advisors')
        <td class="center">
          <!-- <a class="btn-floating btn-small waves-effect waves-light red" href={{ route('mesEncadrements.show', $pfe->id) }}><i class="material-icons">remove_red_eye</i></a> -->
          <a class="btn-floating btn-small waves-effect waves-light blue @if ($pfe->nbr_advisors>=3) disabled @endif" href={{ route('mesEncadrements.show', $pfe->id) }}><i class="material-icons">group_add</i></a>
        </td>
        @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
</div>