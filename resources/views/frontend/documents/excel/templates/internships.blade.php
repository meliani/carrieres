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


    </tr>
</thead>
<tbody>
    @foreach ($trainees as $trainee)

    <tr>
        <td class="strong">{{ $trainee->internship['id'] }}</td>
        <td class="strong">{{ $trainee->pfe_id }}
            {!! isset($trainee->internship->binome)?'.'.$trainee->internship->binome->pfe_id:'' !!}
        </td>
        <td class="sub strong">{{ $trainee->full_name }}</td>
        <td>{{ ( !empty($trainee['option_text'])? $trainee['option_text']:'' ) }}</td>
        <td class="strong">{{ $trainee->internship['raison_sociale'] }}</td>
        <td class="sub">{{  $trainee->internship['intitule'] }}</td>
        <td>{{ isset($trainee->internship->created_at) ? $trainee->internship['created_at']->format('d M Y'):'' }}</td>
        <td>{{ isset($trainee->internship->date_debut) ?  $trainee->internship['date_debut']->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($trainee->internship->date_fin) ?  $trainee->internship['date_fin']->format('d/m/Y'):'' }}</td>   
        <td class="sub">{{  $trainee->internship['duree'] }}</td>


    </tr>
    @endforeach
    </tbody>