<div class="container col s12 m12">
    @include('components.pagination.pagination_wrapper', $paginate = $internships)

    <div class="header">{{ $internships->count() }}</div>
    {{-- <button wire:click="downloadExcel">Telecharger</button> --}}
    <a href="/extractions/InternshipsExport/xlsx">Telecharger la globale</a>
    <table class="table highlight scale-transition scale-in">
        <thead>
            <tr>
                <th class="center" colspan="4">Informations stage</th>
                {{-- contains student details name, phone, personal email --}}
                <th class="center" colspan="5">Dates</th>
                <th class="center" colspan="2"></th>
            </tr>
            <tr>
                <th width="5%" class="center">Id</th>
                {{-- contains student details name, phone, personal email --}}
                <th width="13%" class="center">Etudiant</th>
                <th width="15%" class="center">Entreprise, Pays</th>
                <th width="25%" class="center">Titre du PFE</th>
                <th width="10%" class="center">Déclaration / Dernière modification</th>
                {{-- date when student signed and brought the agreement to administration --}}
                <th width="10%" class="center">achèvement</th>
                <th width="10%" class="center">validation CF</th>
                <th width="10%" class="center">validation encadrant (France)</th>
                <th width="10%" class="center">signature INPT/DASRE</th>
                <th width="10%" class="center">PDFs de conventions</th>
                <th width="10%" class="center">Notes</th>
                <th width="10%" class="center">avancement du projet</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($internships[0])}} --}}
            @foreach ($internships as $internship)
                <tr>
                    {{-- Trainee informations : contains student details name, phone, personal email --}}
                    {{-- {{dd($internship->student)}} --}}
                    @isset($internship->student)
                        <td class="strong">
                            {{ $internship->student->id }}
                        </td>
                        <td class="multiline center strong">
                            <p onclick="copyToClipboard('#full_name{{ $internship->student->id }}')"
                                class="waves-effect sub strong">
                            <p id="full_name{{ $internship->student->id }}">
                                {{ $internship->student->full_name }}</p>
                            </p>

                            <p><span class="new badge blue lighten-1 white-text" data-badge-caption=""
                                    onclick="copyToClipboard('#phone{{ $internship->student->id }}')"
                                    id="phone{{ $internship->student->id }}">{{ $internship->student->phone }}</p>
                            <p>
                                <span class="new badge orange lighten-1 white-text" data-badge-caption=""
                                    onclick="copyToClipboard('#filiere{{ $internship->student->id }}')"
                                    id="filiere{{ $internship->student->id }}">{{ $internship->student->filiere_text }}
                            </p>

                            @isset($internship->binome)
                                <span class="new badge purple lighten-3 white-text tooltipped" data-delay="50"
                                    data-tooltip="{{ $internship->binome->name }}" data-badge-caption="">Binome id :
                                    {{ $internship->binome->id }}
                                </span>
                            @endisset
                            {{-- organization informations --}}
                            @isset($internship->id)
                            </td>
                            <td class="strong">
                                {{ isset($internship->raison_sociale) ? str_limit($internship->raison_sociale, 30) : '' }}
                                <p class="blue-text">{{ isset($internship->pays) ? $internship->pays : '' }}</p>

                            </td>
                            {{-- Internship title --}}
                            {{-- Limit intitulé to 100 characters --}}
                            <td class="sub">
                                {{ isset($internship->intitule) ? str_limit($internship->intitule, 100) : '' }}</td>
                            {{-- Created at and updated at fields --}}
                            <td>
                                <p>{{ isset($internship->created_at) ? \Carbon\Carbon::parse($internship['created_at'])->format('d M Y') : '' }}
                                </p>
                                <p>{{ isset($internship->updated_at) ? \Carbon\Carbon::parse($internship['updated_at'])->format('d M Y') : '' }}
                                </p>
                            </td>
                            <td class="center">
                                <a href=""><i class="material-icons grey-text">person_add</i></a>
                            </td>
                            <td class="center">
                                {{-- if signed icon will be verified_user --}}
                                @if (empty($internship->meta_pedagogic_validation))
                                    <a href="{{ url('~/internships/pedagogic_validation', $internship->id) }}"><i
                                            class="material-icons orange-text">person_add</i></a>
                                @else
                                    <span class="tooltipped" data-delay="100"
                                        data-tooltip="{{ $internship->pedagogic_validation_date }}" data-badge-caption="">
                                        <a href="{{ url('~/internships/pedagogic_validation', $internship->id) }}"><i
                                                class="material-icons green-text">verified_user</i></a>
                                    </span>
                                @endif
                            </td>
                            <td class="multiline center">
                                <a href=""><i class="material-icons grey-text">person_add</i></a>
                            </td>
                            <td class="multiline center">
                                @if (empty($internship->meta_administration_signature))
                                    <a href="{{ url('~/internships/administration_signature', $internship->id) }}"><i
                                            class="material-icons orange-text">person_add</i></a>
                                @else
                                    <span class="tooltipped" data-delay="100"
                                        data-tooltip="{{ $internship->administration_signed_at }}" data-badge-caption="">
                                        <a href="{{ url('~/internships/administration_signature', $internship->id) }}"><i
                                                class="material-icons green-text">verified_user</i></a>
                                    </span>
                                @endif
                            </td>
                            <td class="center">
                                {{-- @include('backend.internships.partials.actions') --}}
                                <a href="{{ url('~/internships/agreements', $internship->student_id) }}"><i
                                        class="material-icons">attach_file</i></a>
                            </td>
                            <td class="center">
                                @if (empty($internship->notes))
                                    <a href="{{ url('~/internships/add_note', $internship->id) }}"><i
                                            class="material-icons blue-text">note_add</i></a>
                                @else
                                    <span class="tooltipped" data-delay="100" data-tooltip="{{ $internship->notes_tip }}"
                                        data-badge-caption="">
                                        <a href="{{ url('~/internships/add_note', $internship->id) }}"><i
                                                class="material-icons orange-text">edit</i></a>
                                    </span>
                                @endif
                            </td>
                            <td class="center">
                                  <span class="tooltipped" data-delay="100" data-tooltip="{{ $internship->notes_tip }}"
                                      data-badge-caption="">
                                      <a href="{{ url('~/internships/projects/add', $internship->id) }}"><i
                                              class="material-icons orange-text">how_to_reg</i></a>
                                  </span>
                          </td>
                        @endisset
                    @endisset
                </tr>
                {{-- @livewire('validate-intern-modal',['internship' => $internship], key('validate-modal-'.$internship->id)) --}}
            @endforeach
        </tbody>
    </table>
</div>



@section('page-script')
    <script src="{{ asset('js/internTable.js') }}"></script>
@endsection
