<?php
//$students = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
$students = \App\Models\Profile\Person::Where('current_year', '3')
    ->with('internship')->get();

//$students = $students->people();
?>
<table>
<thead>
    <tr>
        <th width="5%">id declaration</th>
        <th width="5%">Id</th>
        <th width="13%">Nom et prénom</th>
        <th width="13%">Option</th>
        <th width="15%">Entreprise</th>
        <th width="25%">Titre du PFE</th>
        <th width="10%">Date déclaration</th>
        <th width="10%">Date début</th>
        <th width="10%">Date fin</th>
        <th width="10%">duree</th>
        <th width="10%">Date de soutenance prevue</th>
        <th width="10%">Crenau</th>
        <th width="10%">Heure de debut</th>
        <th width="10%">Heure de fin</th>
        <th width="10%">Salle</th>
        <th width="10%">Encadrant 1</th>
        <th width="10%">Encadrant 2</th>
        <th width="25%">Examinateur 1</th>
        <th width="25%">Examinateur 2</th>
        <th width="25%">Examinateur 3</th>
    </tr>
</thead>
<tbody>
    @foreach ($students as $student)

    <tr>
        <td class="strong">{{ $student->internship['id'] }}</td>
        <td class="strong">{{ $student->pin }}
            {!! isset($student->internship->binome)?'.'.$student->internship->binome->pin:'' !!}
        </td>
        <td class="sub strong">{{ $student->full_name }}</td>
        <td>{{ ( !empty($student['option_text'])? $student['option_text']:'' ) }}</td>
        <td class="strong">{{ $student->internship['organization_name'] }}</td>
        <td class="sub">{{  $student->internship['title'] }}</td>
        <td>{{ isset($student->internship->created_at) ? $student->internship['created_at']->format('d M Y'):'' }}</td>
        <td>{{ isset($student->internship->starting_at) ?  $student->internship['starting_at']->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($student->internship->ending_at) ?  $student->internship['ending_at']->format('d/m/Y'):'' }}</td>   
        <td class="sub">{{  $student->internship['duree'] }}</td>
        <td>{{ isset($student->internship->defense_at) ?  $student->internship->defense_at->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($student->internship->time_slot_id) ?  $student->internship->time_slot_id:'' }}</td>   
        <td>{{ isset($student->internship->defense_start_time) ?  $student->internship->defense_start_time:'' }}</td>   
        <td>{{ isset($student->internship->defense_end_time) ?  $student->internship->defense_end_time:'' }}</td>   
        <td>{{ isset($student->internship->classroom_id) ?  $student->internship['classroom_id']:'' }}</td>   
        <td>{{ isset($student->internship->adviser->adviser1) ? $student->internship->adviser->adviser1['name']:''}}</td>
        <td>{{ isset($student->internship->adviser->adviser1) ? $student->internship->adviser->adviser2['name']:''}}</td>
        <td>{!! isset($student->internship->adviser->exami1) ? '<p>'.$student->internship->adviser->exami1->name.'</p>':'' !!}</td>
        <td>{!! isset($student->internship->adviser->exami2) ? '<p>'.$student->internship->adviser->exami2->name.'</p>':'' !!}</td>
        <td>{!! isset($student->internship->adviser->exami3) ? '<p>'.$student->internship->adviser->exami3->name.'</p>':'' !!}</td>
    </tr>
    @endforeach
    </tbody>