<div class="container col s12 m12">
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">Id</th>
        <th width="13%">Nom et prénom</th>
        <th width="15%">Entreprise</th>
          <th width="25%">Titre du PFE</th>
          <th width="10%">Dates Declaration / Soutenance</th>
          <th width="10%">Encadrant 1</th>   
          <th width="10%">Encadrant 2</th>   
          <th width="25%">Membres du jury</th>            
          <th width="25%">Actions</th>            
      </tr>
    </thead>
    <tbody>
      @foreach ($internships as $internship)
      <tr>
        @if(isset($internship->student))
        <td class="strong">{{ $internship->student->pfe_id }}</td>
        <td><div
          class="waves-effect sub strong tooltipped" data-position="bottom" 
          data-delay="50" 
          data-tooltip="INE 
          {{ $internship->student->ine }}
          {{ $internship->student->scholar_year }}">{{ $internship->student->name }}
          </div>
          @isset($internship->binome)
          <span class="new badge orange lighten-3 white-text tooltipped" 
          data-delay="50" 
          data-tooltip="{{ $internship->binome->name }}"
          data-badge-caption="Binome id : {{ $internship->binome->pfe_id }}">
          </span>              
          @endisset

          <span class="new badge blue lighten-3 white-text" 
          data-badge-caption="{{ ( !empty($internship->student->option_text)? $internship->student->option_text:'' ) }}">
          </span>
          @if (isset($internship->id))
        </td>
        <td class="strong">{{ isset($internship->raison_sociale) ? str_limit($internship->raison_sociale,30):'' }}</td>
        <td class="sub">{{  isset($internship->intitule) ? str_limit($internship->intitule, 100):'' }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>
           <p>{{ isset($internship->created_at) ? \Carbon\Carbon::parse($internship['created_at'])->format('d M Y'):'' }}</p>
           <p>{{ isset($internship->defense_at) ? \Carbon\Carbon::parse($internship['defense_at'])->format('d M Y'):'' }}</p>
        </td>   
         <td class="center">
           @if(isset($internship->adviser->adviser1))
            <p>{{ $internship->adviser->adviser1['name']}}</p>
            <a class="center" href={{ route('Project.create', ['pfe_id' => $internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">edit</i></a>
          @else
            <a href={{ route('Project.create', ['pfe_id' => $internship['id'],'advisor' => '1' ]) }}><i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="center">
          @if(isset($internship->adviser->adviser2))
          <p>{{ $internship->adviser->adviser2['name']}}</p>
          <a class="center" href={{ route('Project.create', ['pfe_id' => $internship['id'],'advisor' => '2' ]) }}>
            <i class="tiny material-icons">edit</i></a>
          @else
            <a href={{ route('Project.create', ['pfe_id' => $internship['id'],'advisor' => '2' ]) }}>
              <i class="tiny material-icons">add</i></a>
          @endif
          </td>
          <td class="multiline center">
          @include('backend.internships.advising.jury',$internship->student)
          </td>
          <td>
          @include('backend.internships.partials.actions')

          </td>
          @endif
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>