<div class="container col s12 m12">
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">Id</th>
        <th width="13%">Nom et prénom</th>
        <th width="15%">Entreprise</th>
          <th width="25%">Titre du PFE</th>
          <th width="10%">Date de déclaration</th>
          <th width="10%">Encadrant 1</th>   
          <th width="10%">Encadrant 2</th>   
          <th width="25%">Membres du jury</th>            
      </tr>
    </thead>
    <tbody>
      @foreach ($trainees as $trainee)

      <tr>
        <td class="strong">{{ $trainee->pfe_id }}</td>
        <td><div class="sub strong">{{ $trainee->name }}</div>
          @if ($trainee['option_text'])
          <span class="new badge blue lighten-3 white-text" 
          data-badge-caption="{{ ( !empty($trainee->option_text)? $trainee->option_text:'' ) }}">
          </span>
          @endif
          @if (isset($trainee->internship->id))
        </td>
        <td class="strong">{{ isset($trainee->internship->raison_sociale) ? str_limit($trainee->internship->raison_sociale,30):'' }}</td>
        <td class="sub">{{  isset($trainee->internship->intitule) ? str_limit($trainee->internship->intitule, 100):'' }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>{{ isset($trainee->internship->created_at) ? \Carbon\Carbon::parse($trainee->internship['created_at'])->format('d M Y'):'' }}</td>   
         <td class="center">
           @if(isset($trainee->internship->adviser->adviser1))
            {{ $trainee->internship->adviser->adviser1['name']}}
            <a class="left" href={{ route('Project.create', ['pfe_id' => $trainee->internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">edit</i></a>
          @else
            <a href={{ route('Project.create', ['pfe_id' => $trainee->internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="center">
          @if(isset($trainee->internship->adviser->adviser2))  
          <a class="left" href={{ route('Project.create', ['pfe_id' => $trainee->internship['id'],'advisor' => '2' ]) }}>
            <i class="tiny material-icons">edit</i></a>
            {{ $trainee->internship->adviser->adviser2['name']}}
          @else
            <a href={{ route('Project.create', ['pfe_id' => $trainee->internship['id'],'advisor' => '2' ]) }}>
              <i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="multiline">
          @include('backend.internship.advising.jury',$trainee)
          </td>
          <td>
          @include('backend.internship.advising.actions',$trainee)

          </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>