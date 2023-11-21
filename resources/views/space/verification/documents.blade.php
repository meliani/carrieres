@extends('layouts.ui.app')

@section('content')
    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Vérification de la convention de stage à l'INPT</h4>
    </div>


    {{-- {{ $v }}/user id:{{ $b[0] }}/internship id:{{ $b[1] }} --}}
    {{-- <ul class="collection">


        <li class="collection-item">
            Stage du {{ $b[2] }} au {{ $b[3] }}
        </li>
    </ul> --}}
    <?php
    $user = App\Models\User::findOrFail($b[0]);
    $person = $user->student;
    ?>

    {{-- list of student informations --}}
    <ul class="collection">
        <li class="collection-item">
            
    Veuillez vérifier les informations de l'étudiant et de l'organisation d'accueil du stage.
    <br>
Pour adresser une requête à l'INPT, veuillez envoyer un e-mail à l'adresse suivante : entreprises.inpt.ac.ma
        </li>
        <li class="collection-item">
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons">person</i>{{ $person->long_full_name }}</div>
                    <div class="collapsible-body">
                        <span>            <p>
                Telepone : {{ $person->phone }}
                <br>
                Email institutionnel : {{ $user->email }}
                <br>
                Email autre : {{ $person->email_perso }}
            </p></span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons">business_center</i><b>Organisation: </b>{{ $person->internship->raison_sociale }}</div>
                    <div class="collapsible-body">
                        <span>{{ $person->internship->ville }} / {{ $person->internship->pays }}</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">access_time</i><b>Durée: </b> 
                         {{ $person->internship->duration_in_months }}</div>
                    {{-- display and format date debut and date fin to human readable using months as granularity --}}
                    <div class="collapsible-body"><span> {{ $person->internship->date_debut->format('d/m/Y') }} au
                            {{ $person->internship->date_fin->format('d/m/Y') }}</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">laptop_mac</i><b>Intitulé: </b>
                        {{ $person->internship->intitule }}</div>
                    <div class="collapsible-body"><span>{{ $person->internship->descriptif }}</span></div>
                    <div class="collapsible-body"><span>{{ $person->internship->keywords }}</span></div>
                </li>
            </ul>
        </li>
    </ul>
@endsection
