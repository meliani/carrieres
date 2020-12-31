<?php 
//$trainees = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
$trainees = \App\Models\Profile\Person::Where('ine','3')
->with('internship')->get();

//$trainees = $trainees->people();
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
    @foreach ($trainees as $trainee)

    <tr>
        <td class="strong">{{ $trainee->internship['id'] }}</td>
        <td class="strong">{{ $trainee->pfe_id }}
            {!! isset($trainee->internship->binome)?'.'.$trainee->internship->binome->pfe_id:'' !!}
        </td>
        <td class="sub strong">{{ $trainee->name }}</td>
        <td>{{ ( !empty($trainee['option_text'])? $trainee['option_text']:'' ) }}</td>
        <td class="strong">{{ $trainee->internship['raison_sociale'] }}</td>
        <td class="sub">{{  $trainee->internship['intitule'] }}</td>
        <td>{{ isset($trainee->internship->created_at) ? $trainee->internship['created_at']->format('d M Y'):'' }}</td>
        <td>{{ isset($trainee->internship->date_debut) ?  $trainee->internship['date_debut']->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($trainee->internship->date_fin) ?  $trainee->internship['date_fin']->format('d/m/Y'):'' }}</td>   
        <td class="sub">{{  $trainee->internship['duree'] }}</td>
        <td>{{ isset($trainee->internship->defense_at) ?  $trainee->internship->defense_at->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($trainee->internship->time_slot_id) ?  $trainee->internship->time_slot_id:'' }}</td>   
        <td>{{ isset($trainee->internship->defense_start_time) ?  $trainee->internship->defense_start_time:'' }}</td>   
        <td>{{ isset($trainee->internship->defense_end_time) ?  $trainee->internship->defense_end_time:'' }}</td>   
        <td>{{ isset($trainee->internship->classroom_id) ?  $trainee->internship['classroom_id']:'' }}</td>   
        <td>{{ isset($trainee->internship->adviser->adviser1) ? $trainee->internship->adviser->adviser1['name']:''}}</td>
        <td>{{ isset($trainee->internship->adviser->adviser1) ? $trainee->internship->adviser->adviser2['name']:''}}</td>
        <td>{!! isset($trainee->internship->adviser->exami1) ? '<p>'.$trainee->internship->adviser->exami1->name.'</p>':'' !!}</td>
        <td>{!! isset($trainee->internship->adviser->exami2) ? '<p>'.$trainee->internship->adviser->exami2->name.'</p>':'' !!}</td>
        <td>{!! isset($trainee->internship->adviser->exami3) ? '<p>'.$trainee->internship->adviser->exami3->name.'</p>':'' !!}</td>
    </tr>
    @endforeach
    </tbody>