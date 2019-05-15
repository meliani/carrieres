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
$person = App\User::findOrFail($b[0])->people;
?>
</br>
Nom : {{ $person->name }}
</br>
Telepone : {{ $person->phone }}
</br>
Email : {{ $person->email }}