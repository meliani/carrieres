<div class="container col s12 m12">
  <table class="responsive-table highlight scale-transition scale-in">
    <thead>
      <tr>
          <th width="20%">Nom et prénom</th>
          <th width="10%">Entreprise</th>
          <th width="35%">Titre du PFE</th>
          <th width="15%">Date de déclaration</th>
          <th width="20%">Encadrants / Examinateurs</th>   
          @can('edit advisors')
          <th width="5%">Ajouter Encadrant / Examinateur</th>   
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
         <td>
          @if ($pfe->nbr_advisors>0)
          <ul class="small collection">
           @foreach ($advisors as $advisor)
            @if ($pfe->id==$advisor->id)
              <li class="collection-item light-blue-text text-lighten-1">{{ $advisor->advisorName }}
              <span class="new badge blue right lighten-5 blue-text" data-badge-caption="{{  \Carbon\Carbon::parse($advisor->created_at)->format('d M') }}"></span>
            </li>
            @endif
           @endforeach
          </ul>
          @endif
          </td>
        @can('edit advisors')
        <td class="center">
          <!-- <a class="btn-floating btn-small waves-effect waves-light red" href={{ route('pfeEncadrements.create', $pfe->id) }}><i class="material-icons">remove_red_eye</i></a> -->
          <a class="btn-floating btn-small waves-effect waves-light blue @if ($pfe->nbr_advisors>=2) disabled @endif" href={{ route('pfeEncadrements.create', ['pfe_id' => $pfe->id]) }}><i class="material-icons">group_add</i></a>
        </td>
        @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
</div>