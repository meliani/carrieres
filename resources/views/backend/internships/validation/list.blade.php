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
                    <td class="strong">{{ $student->pin }}</td>
                    <td>
                        <div class="sub strong">{{ $student->full_name }}</div>
                        @if ($student['filiere_text'])
                            <span class="new badge blue lighten-3 white-text"
                                data-badge-caption="{{ !empty($student->filiere_text) ? $student->filiere_text : '' }}">
                            </span>
                        @endif
                        @if (isset($student->internship->id))
                    </td>
                    <td class="strong">
                        {{ isset($student->internship->organization_name) ? str_limit($student->internship->organization_name, 30) : '' }}
                    </td>
                    <td class="sub">
                        {{ isset($student->internship->intitule) ? str_limit($student->internship->intitule, 100) : '' }}
                    </td>
                    {{-- Limit intitulé to 100 characters --}}
                    <td>{{ isset($student->internship->created_at) ? \Carbon\Carbon::parse($student->internship['created_at'])->format('d M Y') : '' }}
                    </td>
                    <td class="center">
                        @if (isset($student->internship->is_signed) * 0)
                            {{ __('This agreement was signed') }}{{ __('by') }}
                            {{ $student->internship->professor->full_name }}
                        @else
                            <a class="blue btn-small"
                                href={{ route('backend.projects.create', ['id' => $student->internship['id']]) }}><i
                                    class="tiny material-icons">remove_red_eye</i></a>
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
