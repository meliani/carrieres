<b>Informations sur la convention :</b>
</br>
Type de stage : {{ $a[0] }}
</br>
Raison sociale de l'Entreprise : {{ $a[1] }}
</br>
Id utlisateur : {{ $b[0] }}
</br>
Id declaration de stage : {{ $b[1] }}
</br>
Date debut : {{ $b[2] }}
</br>
Date fin : {{ $b[3] }}
<b>Informations sur la plateforme</b>
</br>
Nom : {{ User::getById($b[0])->name }}
Telepone : {{ User::getById($b[0])->people->phone }}