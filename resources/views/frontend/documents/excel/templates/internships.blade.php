<?php 
//$students = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
$students2 = \App\Models\Profile\Student::with('internship')->get();
// ->with('internship')->get();
//dd($students);
//$students = $students->people();
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
        <th width="25%">Niveau</th>

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
    @foreach ($students as $student)
    <tr>
        {{-- {{dd($student->internship->id)}} --}}
        {{-- Student fields --}}
        <td class="strong">{{ isset($student->internship->id)? $student->internship->id:''}}</td>
        <td class="strong">{{ $student->id }}
            {!! isset($student->internship->binome)?'.'.$student->internship->binome_user_id:'' !!}
        </td>
        <td class="sub strong">{{ $student->full_name }}</td>
        <td>{{ isset($student->filiere_text)? $student->filiere_text:'' }}</td>
        <td>{{ $student->email_perso }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->cv }}</td>
        <td>{{ $student->lm }}</td>
        <td>{{ $student->photo }}</td>
        <td>{{ $student->is_mobility }}</td>
        <td>{{ $student->abroad_school }}</td>
        <td>{{ $student->is_active }}</td>
        <td>{{ $student->program_id }}</td>

        {{-- INternship fields --}}
        @isset($student->internship->id)
        <td class="strong">{{ $student->internship->raison_sociale }}</td>

        <td>{{  $student->internship->pays }}</td>
        <td>{{  $student->internship->ville }}</td>
        <td>{{  $student->internship->office_location }}</td>
        <td>{{  $student->internship->intitule }}</td>
        <td>{{  $student->internship->descriptif }}</td>
        <td>{{  $student->internship->keywords }}</td>

        <td>{{ isset($student->internship->created_at) ? $student->internship->created_at->format('d/m/Y'):'' }}</td>
        <td>{{ isset($student->internship->updated_at) ? $student->internship->updated_at->format('d/m/Y'):'' }}</td>
        <td>{{ isset($student->internship->date_debut) ?  $student->internship->date_debut->format('d/m/Y'):'' }}</td>   
        <td>{{ isset($student->internship->date_fin) ?  $student->internship->date_fin->format('d/m/Y'):'' }}</td>   
        <td>{{  $student->internship->duree }}</td>
        <td>{{  $student->internship->parrain_nom }} {{  $student->internship->parrain_prenom }}</td>
        <td>{{  $student->internship->parrain_fonction }}</td>
        <td>{{  $student->internship->parrain_tel }}</td>
        <td>{{  $student->internship->parrain_mail }}</td>
        <td>{{  $student->internship->encadrant_ext_nom }} {{  $student->internship->encadrant_ext_prenom }}</td>
        <td>{{  $student->internship->encadrant_ext_fonction }}</td>
        <td>{{  $student->internship->encadrant_ext_tel }}</td>
        <td>{{  $student->internship->encadrant_ext_mail }}</td>
        <td>{{  $student->internship->int_adviser_name }}</td>
        <td>{{  $student->internship->remuneration }} {{  $student->internship->currency }}</td>
        <td>{{  $student->internship->load }}</td>
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
        <td></td>
        @endisset

    </tr>
    @endforeach
    </tbody>