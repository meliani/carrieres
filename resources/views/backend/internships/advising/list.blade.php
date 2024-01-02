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
            @foreach ($students as $student)
                <tr>
                    <td class="strong">{{ $student->pin }}</td>
                    <td>
                        <div class="sub strong">{{ $student->name }}</div>
                        @if ($student['option_text'])
                            <span class="new badge blue lighten-3 white-text"
                                data-badge-caption="{{ !empty($student->option_text) ? $student->option_text : '' }}">
                            </span>
                        @endif
                        @if (isset($student->internship->id))
                    </td>
                    <td class="strong">
                        {{ isset($student->internship->organization_name) ? str_limit($student->internship->organization_name, 30) : '' }}
                    </td>
                    <td class="sub">
                        {{ isset($student->internship->title) ? str_limit($student->internship->title, 100) : '' }}
                    </td>
                    {{-- Limit intitulé to 100 characters --}}
                    <td>{{ isset($student->internship->created_at) ? \Carbon\Carbon::parse($student->internship['created_at'])->format('d M Y') : '' }}
                    </td>
                    <td class="center">
                        @if (isset($student->internship->adviser->adviser1))
                            {{ $student->internship->adviser->adviser1['name'] }}
                            <a class="left"
                                href={{ route('Project.create', ['pin' => $student->internship['id'], 'advisor' => '1']) }}><i
                                    class="tiny material-icons">edit</i></a>
                        @else
                            <a
                                href={{ route('Project.create', ['pin' => $student->internship['id'], 'advisor' => '1']) }}><i
                                    class="tiny material-icons">add</i></a>
                        @endif
                    </td>
                    <td class="center">
                        @if (isset($student->internship->adviser->adviser2))
                            <a class="left"
                                href={{ route('Project.create', ['pin' => $student->internship['id'], 'advisor' => '2']) }}>
                                <i class="tiny material-icons">edit</i></a>
                            {{ $student->internship->adviser->adviser2['name'] }}
                        @else
                            <a
                                href={{ route('Project.create', ['pin' => $student->internship['id'], 'advisor' => '2']) }}>
                                <i class="tiny material-icons">add</i></a>
                        @endif
                    </td>
                    <td class="multiline">
                        @include('backend.internships.advising.jury', $student)
                    </td>
                    <td>
                        @include('backend.internships.advising.actions', $student)

                    </td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
