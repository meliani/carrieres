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
        <th width="5%">Id</th>
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
        <th width="10%">Date déclaration</th>
        <th width="10%">Date début</th>
        <th width="10%">Date fin</th>
        <th width="10%">durée</th>
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
        <td class="strong">{{ $trainee['id'] }}
            {!! isset($trainee->internship->binome)?'.'.$trainee->internship->binome->id:'' !!}
        </td>
        <td class="sub strong">{{ $trainee->full_name }}</td>
        <td>{{ isset($trainee->filiere_text)? $trainee->filiere_text:'' }}</td>
        <td class="sub">{{ $trainee->email_perso }}</td>
        <td class="sub">{{ $trainee->phone }}</td>
        <td class="sub">{{ $trainee->cv }}</td>
        <td class="sub">{{ $trainee->lm }}</td>
        <td class="sub">{{ $trainee->photo }}</td>
        <td class="sub">{{ $trainee->is_mobility }}</td>
        <td class="sub">{{ $trainee->abroad_school }}</td>
        <td class="sub">{{ $trainee->is_active }}</td>

        {{-- INternship fields --}}
        @isset($trainee->internship->id)
        <td class="strong">{{ $trainee->internship->raison_sociale }}</td>

        <td class="sub">{{  $trainee->internship->pays }}</td>
        <td class="sub">{{  $trainee->internship->ville }}</td>
        <td class="sub">{{  $trainee->internship->office_location }}</td>
        <td class="sub">{{  $trainee->internship->intitule }}</td>
        <td>{{ isset($trainee->internship->created_at) ? $trainee->internship->created_at->format('d M Y'):'' }}</td>
        <td>{{ isset($trainee->internship->date_debut) ?  $trainee->internship->date_debut->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($trainee->internship->date_fin) ?  $trainee->internship->date_fin->format('d/m/Y'):'' }}</td>   
        <td class="sub">{{  $trainee->internship->duree }}</td>
        <td class="sub">{{  $trainee->internship->parrain_nom }} {{  $trainee->internship->parrain_prenom }}</td>
        <td class="sub">{{  $trainee->internship->parrain_fonction }}</td>
        <td class="sub">{{  $trainee->internship->parrain_tel }}</td>
        <td class="sub">{{  $trainee->internship->parrain_mail }}</td>
        <td class="sub">{{  $trainee->internship->encadrant_ext_nom }} {{  $trainee->internship->encadrant_ext_prenom }}</td>
        <td class="sub">{{  $trainee->internship->encadrant_ext_fonction }}</td>
        <td class="sub">{{  $trainee->internship->encadrant_ext_tel }}</td>
        <td class="sub">{{  $trainee->internship->encadrant_ext_mail }}</td>
        <td class="sub">{{  $trainee->internship->int_adviser_name }}</td>
        <td class="sub">{{  $trainee->internship->remuneration }} {{  $trainee->internship->currency }}</td>
        <td class="sub">{{  $trainee->internship->load }}</td>
        @endisset



    </tr>
    @endforeach
    </tbody>