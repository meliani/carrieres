<div class="container col s12 m12">
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">Id</th>
        <th width="13%">Nom et prénom</th>
        <th width="15%">Entreprise</th>
          <th width="25%">Titre du PFE</th>
          <th width="10%">Date de déclaration</th>
          <th width="10%">Visualiser la declaration</th>   
          <th width="10%"></th>   
      </tr>
    </thead>
    <tbody>
      @foreach ($trainees as $trainee)

      <tr>
        <td class="strong">{{ $trainee->pfe_id }}</td>
        <td><div class="sub strong">{{ $trainee->full_name }}</div>
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
           @if(isset($trainee->internship->is_signed))
            Convention signée par {{ $trainee->internship->professor->name }}
          @else
            <a class="blue btn-small" href={{ route('Sign.create', ['id' => $trainee->internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">remove_red_eye</i></a>
          @endif
          </td>
          <td class="center">

          </td>

      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>