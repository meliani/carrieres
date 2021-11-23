<b>Informations decryptes du tag de la convention :</b>
</br>
Cryptage : {{ $v }}
</br>
Id utlisateur : {{ $b[0] }}
</br>
Id declaration de stage : {{ $b[1] }}
</br>
Date debut : {{ $b[2] }}
</br>
Date fin : {{ $b[3] }}
</br>
</br>

<b>Informations sur la plateforme</b>
<?php 
$user = App\User::findOrFail($b[0]);
$person = $user->people;
?>
</br>
<b>Etudiant</b>
</br>
Nom de l'etudiant : {{ $person->title }}{{ $person->name }}
</br>
Telepone : {{ $person->phone }}
</br>
Email INPT : {{ $user->email }}
</br>
Email autre : {{ $person->email }}
</br>
<b>Stage</b>
</br>
Entreprise : {{ $person->internship->raison_sociale }}
</br>
Location : {{ $person->internship->ville }} / {{ $person->internship->pays }}
</br>
intitule : {{ $person->internship->intitule }}
</br>
Date de debut : {{ $person->internship->date_debut }}
</br>
Date de fin : {{ $person->internship->date_fin }}
</br>
Mots cles : {{ $person->internship->keywords }}
</br>
Descriptif : {{ $person->internship->descriptif }}