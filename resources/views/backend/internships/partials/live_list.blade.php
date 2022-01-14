<div class="container col s12 m12">
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">Id</th>
        <th width="13%">Etudiant</th>
        {{-- contain student details name, phone, personal email --}}
        <th width="15%">Entreprise</th>
          <th width="25%">Titre du PFE</th>
          <th width="10%">Dates Declaration</th>
          <th width="10%">Validation CF</th>   
          <th width="10%">Signature INPT</th>   
          <th width="25%"></th>            
          <th width="25%">Actions</th>            
      </tr>
    </thead>
    <tbody>
      @foreach ($internships as $internship)
      <tr>
        @if(isset($internship->student))
        <td class="strong">{{ $internship->student->user_id }}
        </td>
        <td><div
          class="waves-effect sub strong">{{ $internship->student->full_name }}
          </div>
          
          
            <p><span class="new badge blue lighten-1 white-text" 
            data-badge-caption="{{ $internship->student->phone }}"></p>
            <p><span class="new badge orange lighten-3 white-text" 
            data-badge-caption="{{ $internship->student->filiere_text }}"></p>

          @isset($internship->binome)
          <span class="new badge orange lighten-3 white-text tooltipped" 
          data-delay="50" 
          data-tooltip="{{ $internship->binome->name }}"
          data-badge-caption="Binome id : {{ $internship->binome->user_id }}">
          </span>
          @endisset


          @if (isset($internship->id))
        </td>
        <td class="strong">{{ isset($internship->raison_sociale) ? str_limit($internship->raison_sociale,30):'' }}</td>
        <td class="sub">{{  isset($internship->intitule) ? str_limit($internship->intitule, 100):'' }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>
           <p>{{ isset($internship->created_at) ? \Carbon\Carbon::parse($internship['created_at'])->format('d M Y'):'' }}</p>
        </td>   
         <td class="center">

          </td>
          <td class="center">

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