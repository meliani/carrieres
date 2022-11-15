<div class="container col s12 m12">
  <button wire:click="downloadExcel">Telecharger</button>
  <div id="dateholder">hola</div>

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
      {{-- @livewire('validate-intern',['internship' => $internship]) --}}
      <tr>
        @if(isset($internship->student))
        <td class="strong">{{ $internship->student->user_id }}
        </td>
        <td  class="multiline center">
          <div onclick="copyToClipboard('#full_name{{ $internship->student->user_id }}')" class="waves-effect sub strong"><p id="full_name{{ $internship->student->user_id }}">
            {{ $internship->student->full_name }}</p>
          </div>

            <p><span class="new badge blue lighten-1 white-text" 
            data-badge-caption="" onclick="copyToClipboard('#phone{{ $internship->student->user_id }}')" id="phone{{ $internship->student->user_id }}">{{ $internship->student->phone }}</p>
            <p><span class="new badge orange lighten-1 white-text" 
            data-badge-caption="" onclick="copyToClipboard('#filiere{{ $internship->student->user_id }}')" id="filiere{{ $internship->student->user_id }}">{{ $internship->student->filiere_text }}</p>

          @isset($internship->binome)
          <span class="new badge purple lighten-3 white-text tooltipped" 
          data-delay="50" 
          data-tooltip="{{ $internship->binome->name }}"
          data-badge-caption="">Binome id : {{ $internship->binome->user_id }}
          </span>
          @endisset


          @if (isset($internship->id))
        </td>
        <td class="strong">{{ isset($internship->raison_sociale) ? str_limit($internship->raison_sociale,30):'' }}
            <p class="blue-text">{{ isset($internship->pays) ? $internship->pays : '' }}</p>

        </td>
        <td class="sub">{{  isset($internship->intitule) ? str_limit($internship->intitule, 100):'' }}</td>
         {{-- Limit intitulé to 100 characters --}}
         <td>
           <p>{{ isset($internship->created_at) ? \Carbon\Carbon::parse($internship['created_at'])->format('d M Y'):'' }}</p>
        </td>   
         <td class="center">

          </td>
          <td class="center">
            {{-- <button class="waves-effect waves-light small-btn modal-trigger" href="#modal1" wire:click="$emit('ValidateIntern')" >live sign</button> --}}
          </td>
          <td class="multiline center">
      
          </td>
          <td>
          {{-- @include('backend.internships.partials.actions') --}}
          <a class="waves-effect waves-light small-btn" 
          href="{{url('-/internships/agreements',$internship->user_id)}}"
          >voir fichiers</a>
          </td>
          @endif
      </tr>
      @endif
      {{-- @livewire('validate-intern-modal',['internship' => $internship], key('validate-modal-'.$internship->id)) --}}

      @endforeach
       
    </tbody>
  </table>
</div>



@section('page-script')
<script src="{{ asset('js/internTable.js') }}"></script>

@endsection