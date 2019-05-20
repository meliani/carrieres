<?php
$required = 'required';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'parrain_titre',
    'value' ,
    'label' => 'Civilité du parrain',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'nature_people',
    'helper' => 'Civilité du parrain',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Mr','0'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_nom',
    'value' ,
    'label' => 'Nom du parrain',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person_outline',
    'helper' => 'Nom du représentant de l\'entreprise',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_prenom',
    'value' ,
    'label' => 'Prénom du parrain',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person',
    'helper' => 'Prénom du représentant de l\'entreprise',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>
<div class = "row">
    {{ Form::textGroup([
        'name' => 'parrain_fonction',
        'value' ,
        'label' => 'Fonction du parrain',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'work',
        'helper' => 'Fonction du représentant de l\'entreprise',
        'required' => $required,
        'cols' => 4,
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_tel',
    'value' ,
    'label' => 'Téléphone du parrain',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'phone',
    'helper' => 'Téléphone du représentant de l\'entreprise',
    'required' => $required,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_mail',
    'value' ,
    'label' => 'Email du parrain',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'mail',
    'helper' => 'Email du représentant de l\'entreprise',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>