<b>Informations sur la convention :</b>
</br>
Cryptage : {{ $a[0] }}
</br>
Type de stage : {{ $a[1] }}
</br>
Raison sociale de l'Entreprise : {{ $a[2] }}
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
Nom de l'etudiant : {{ $person->title }}{{ $person->name }}
</br>
Telepone : {{ $person->phone }}
</br>
Email INPT : {{ $user->email }}
</br>
Email autre : {{ $person->email }}
</br>
<b>Stage</b>
</br>Sujet : {{ $person->internship->intitule }}
</br>Entreprise : {{ $person->internship->raison_sociale }}
</br>Date de declaration : {{ $person->internship->created_at }}
</br>parrain : {{ $person->internship->parrain_name }}
</br>telephone parrain : {{ $person->internship->parrain_tel }}
</br>encadrant ext : {{ $person->internship->encadrant_ext_name }}
</br>telephone encadrant ext : {{ $person->internship->encadrant_ext_tel }}