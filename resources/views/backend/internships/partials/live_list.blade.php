<div class="container col s12 m12">
  {{-- <button wire:click="downloadExcel">Telecharger</button> --}}
<a href="/extractions/InternshipsExport/xlsx">Telecharger la globale</a>
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%" class="center">Id</th>
        {{-- contains student details name, phone, personal email --}}
        <th width="13%" class="center">Etudiant</th>
        <th width="15%" class="center">Entreprise, Pays</th>
        <th width="25%" class="center">Titre du PFE</th>
        <th width="10%" class="center">Dates Déclaration / Dernière modification</th>
        {{-- date when student signed and brought the agreement to administration --}}
        <th width="10%" class="center">Date d'achèvement</th>
        <th width="10%" class="center">Date de validation CF</th>
        <th width="10%" class="center">Date de validation encadrant (France)</th>
        <th width="10%" class="center">Date de signature INPT/DASRE</th>
        <th width="10%" class="center">PDFs de conventions</th>
        <th width="10%" class="center">Notes</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($internships as $internship)

      <tr>
        {{-- Trainee informations : contains student details name, phone, personal email --}}
        @if(isset($internship->student))
        <td class="strong">{{ $internship->student->user_id }}
        </td>
        <td class="multiline center strong">
          <p onclick="copyToClipboard('#full_name{{ $internship->student->user_id }}')" class="waves-effect sub strong">
          <p id="full_name{{ $internship->student->user_id }}">{{ $internship->student->full_name }}</p>
          </p>

          <p><span class="new badge blue lighten-1 white-text" data-badge-caption=""
              onclick="copyToClipboard('#phone{{ $internship->student->user_id }}')"
              id="phone{{ $internship->student->user_id }}">{{ $internship->student->phone }}</p>
          <p>
            <span class="new badge orange lighten-1 white-text" data-badge-caption=""
              onclick="copyToClipboard('#filiere{{ $internship->student->user_id }}')"
              id="filiere{{ $internship->student->user_id }}">{{ $internship->student->filiere_text }}
          </p>

          @isset($internship->binome)
          <span class="new badge purple lighten-3 white-text tooltipped" data-delay="50"
            data-tooltip="{{ $internship->binome->name }}" data-badge-caption="">Binome id : {{
            $internship->binome->user_id }}
          </span>
          @endisset
          {{-- organization informations --}}
          @if (isset($internship->id))
        </td>
        <td class="strong">{{ isset($internship->raison_sociale) ? str_limit($internship->raison_sociale,30):'' }}
          <p class="blue-text">{{ isset($internship->pays) ? $internship->pays : '' }}</p>

        </td>
        {{-- Internship title --}}
        {{-- Limit intitulé to 100 characters --}}
        <td class="sub">{{ isset($internship->intitule) ? str_limit($internship->intitule, 100):'' }}</td>
        {{-- Created at and updated at fields --}}
        <td>
          <p>{{ isset($internship->created_at) ? \Carbon\Carbon::parse($internship['created_at'])->format('d M Y'):'' }}
          </p>
          <p>{{ isset($internship->updated_at) ? \Carbon\Carbon::parse($internship['updated_at'])->format('d M Y'):'' }}
          </p>
        </td>
        <td class="center">
          <a
            href=""><i class="material-icons">person_add</i></a>
        </td>
        <td class="center">
          {{-- if signed icon will be verified_user --}}
          @if(empty($internship->meta_pedagogic_validation))
          <a href="{{url('-/internships/pedagogic_validation',$internship->id)}}"><i class="material-icons orange-text">person_add</i></a>
          @else
          <a href="{{url('-/internships/pedagogic_validation',$internship->id)}}"><i class="material-icons green-text">verified_user</i></a>
          @endif
        </td>
        <td class="multiline center">
          <a
            href=""><i class="material-icons">person_add</i></a>
        </td>
        <td class="multiline center">
          <a
            href=""><i class="material-icons">person_add</i></a>
        </td>
        <td class="center">
          {{-- @include('backend.internships.partials.actions') --}}
          <a
            href="{{url('-/internships/agreements',$internship->user_id)}}"><i class="material-icons">attach_file</i></a>
        </td>
        <td class="center">
          {{-- @include('backend.internships.partials.actions') --}}
          <a
            href=""><i class="material-icons">note_add</i></a>
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