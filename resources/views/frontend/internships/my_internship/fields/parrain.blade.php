<?php
$required = 'required';
?>

<div class = "row">
{{ Form::selectGroup([
    'name' => 'parrain_titre',
    'value' ,
    'label' => 'Civilité',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'nature_people',
    'helper' => '',
    'required' => $required,
    'cols' => 3,
    'data' => ['Mr'=>'Mr','Mrs'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_nom',
    'value' ,
    'label' => 'Nom',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person_outline',
    'helper' => '',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_prenom',
    'value' ,
    'label' => 'Prénom',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person',
    'helper' => '',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>
<div class = "row">
    {{ Form::textGroup([
        'name' => 'parrain_fonction',
        'value' ,
        'label' => 'Fonction',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'work',
        'helper' => '',
        'required' => $required,
        'cols' => 4,
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_tel',
    'value' ,
    'label' => 'Téléphone',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'phone',
    'helper' => '',
    'required' => $required,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'parrain_mail',
    'value' ,
    'label' => 'Email',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'mail',
    'helper' => '',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>