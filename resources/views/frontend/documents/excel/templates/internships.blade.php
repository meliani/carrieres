<?php 
//$trainees = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
$trainees = \App\Models\Profile\Student::with('internship')->get();
// ->with('internship')->get();
//dd($trainees);
//$trainees = $trainees->people();
?>
<table>
<thead>
    <tr>
        <th width="5%">id déclaration</th>
        <th width="5%">Id PFE</th>
        <th width="13%">Nom et prénom</th>
        <th width="13%">Filière</th>
        <th width="13%">email</th>
        <th width="13%">Téléphone</th>
        <th width="13%">Lien CV</th>
        <th width="13%">Lien Lettre de motivation</th>
        <th width="13%">Lien photo</th>
        <th width="13%">mobilité</th>
        <th width="13%">Etablissement d'échange si mobilité</th>
        <th width="13%">status compte carrieres</th>

        <th width="15%">Entreprise</th>
        <th width="10%">Pays</th>
        <th width="10%">ville</th>
        <th width="10%">Lieu de stage</th>

        <th width="25%">Titre du PFE</th>
        <th width="25%">Détails du PFE</th>
        <th width="25%">Keywords du PFE</th>
        <th width="10%">Date de déclaration</th>
        <th width="10%">Date de dernière modification de déclaration</th>
        <th width="10%">Date de début</th>
        <th width="10%">Date de fin</th>
        <th width="10%">durée de stage</th>
        <th width="10%">nom parrain</th>
        <th width="10%">fonction parrain</th>
        <th width="10%">Téléphone parrain</th>
        <th width="10%">email parrain</th>
        <th width="10%">nom encadrant externe</th>
        <th width="10%">fonction encadrant externe</th>
        <th width="10%">Téléphone encadrant externe</th>
        <th width="10%">email encadrant externe</th>
        <th width="10%">Encadrant interne</th>
        <th width="10%">Rémuneration</th>
        <th width="10%">charge heures/semaine</th>

    </tr>
</thead>
<tbody>
    @foreach ($trainees as $trainee)
    <tr>
        {{-- {{dd($trainee->internship->id)}} --}}
        {{-- Student fields --}}
        <td class="strong">{{ isset($trainee->internship->id)? $trainee->internship->id:''}}</td>
        <td class="strong">{{ $trainee->user_id }}
            {!! isset($trainee->internship->binome)?'.'.$trainee->internship->binome_user_id:'' !!}
        </td>
        <td class="sub strong">{{ $trainee->full_name }}</td>
        <td>{{ isset($trainee->filiere_text)? $trainee->filiere_text:'' }}</td>
        <td>{{ $trainee->email_perso }}</td>
        <td>{{ $trainee->phone }}</td>
        <td>{{ $trainee->cv }}</td>
        <td>{{ $trainee->lm }}</td>
        <td>{{ $trainee->photo }}</td>
        <td>{{ $trainee->is_mobility }}</td>
        <td>{{ $trainee->abroad_school }}</td>
        <td>{{ $trainee->is_active }}</td>

        {{-- INternship fields --}}
        @isset($trainee->internship->id)
        <td class="strong">{{ $trainee->internship->raison_sociale }}</td>

        <td>{{  $trainee->internship->pays }}</td>
        <td>{{  $trainee->internship->ville }}</td>
        <td>{{  $trainee->internship->office_location }}</td>
        <td>{{  $trainee->internship->intitule }}</td>
        <td>{{  $trainee->internship->descriptif }}</td>
        <td>{{  $trainee->internship->keywords }}</td>

        <td>{{ isset($trainee->internship->created_at) ? $trainee->internship->created_at->format('d/m/Y'):'' }}</td>
        <td>{{ isset($trainee->internship->updated_at) ? $trainee->internship->updated_at->format('d/m/Y'):'' }}</td>
        <td>{{ isset($trainee->internship->date_debut) ?  $trainee->internship->date_debut->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($trainee->internship->date_fin) ?  $trainee->internship->date_fin->format('d/m/Y'):'' }}</td>   
        <td>{{  $trainee->internship->duree }}</td>
        <td>{{  $trainee->internship->parrain_nom }} {{  $trainee->internship->parrain_prenom }}</td>
        <td>{{  $trainee->internship->parrain_fonction }}</td>
        <td>{{  $trainee->internship->parrain_tel }}</td>
        <td>{{  $trainee->internship->parrain_mail }}</td>
        <td>{{  $trainee->internship->encadrant_ext_nom }} {{  $trainee->internship->encadrant_ext_prenom }}</td>
        <td>{{  $trainee->internship->encadrant_ext_fonction }}</td>
        <td>{{  $trainee->internship->encadrant_ext_tel }}</td>
        <td>{{  $trainee->internship->encadrant_ext_mail }}</td>
        <td>{{  $trainee->internship->int_adviser_name }}</td>
        <td>{{  $trainee->internship->remuneration }} {{  $trainee->internship->currency }}</td>
        <td>{{  $trainee->internship->load }}</td>
        @else
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>   
        <td></td>   
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        @endisset

    </tr>
    @endforeach
    </tbody>