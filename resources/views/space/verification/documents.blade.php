<b>Informations sur la convention :</b>
</br>
Cryptage : {{ $v }}
</br>
Type de stage : 
</br>
Raison sociale de l'Entreprise : 
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
</br>
Telepone : {{ $person->internship->title }}