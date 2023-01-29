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
      @foreach ($students as $student)

      <tr>
        <td class="strong">{{ $student->pfe_id }}</td>
        <td><div class="sub strong">{{ $student->full_name }}</div>
          @if ($student['stream_id'])
          <span class="new badge blue lighten-3 white-text" 
          data-badge-caption="{{ ( !empty($student->stream->id)? $student->stream->short_title:'' ) }}">
          </span>
          @endif
          @if (isset($student->internship->id))
        </td>
        <td class="strong">{{ isset($student->internship->raison_sociale) ? str_limit($student->internship->raison_sociale,30):'' }}</td>
        <td class="sub">{{  isset($student->internship->intitule) ? str_limit($student->internship->intitule, 100):'' }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>{{ isset($student->internship->created_at) ? \Carbon\Carbon::parse($student->internship['created_at'])->format('d M Y'):'' }}</td>   
         <td class="center">
           @if(isset($student->internship->is_signed))
            Convention signée par {{ $student->internship->professor->full_name }}
          @else
            <a class="blue btn-small" href={{ route('Sign.create', ['id' => $student->internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">remove_red_eye</i></a>
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