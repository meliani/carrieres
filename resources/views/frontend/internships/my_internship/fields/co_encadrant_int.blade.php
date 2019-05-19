<?php
$required = '';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'co_encadrant_int_titre',
    'value' => '',
    'label' => 'Civilité du co-encadrant interne',
    'placeholder' => '',
    'class' => 'validate',
    'icon' => '',
    'helper' => 'Civilité du co-encadrant interne',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Mr','0'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'co_encadrant_int_nom',
    'value' => '',
    'label' => 'Nom du co-encadrant interne',
    'placeholder' => '',
    'class' => 'validate',
    'icon' => '',
    'helper' => 'Nom du co-encadrant interne',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'co_encadrant_int_prenom',
    'value' => '',
    'label' => 'Prénom du co-encadrant interne',
    'placeholder' => '',
    'class' => 'validate',
    'icon' => '',
    'helper' => 'Prénom du co-encadrant interne',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>
<div class = "row">
    {{ Form::textGroup([
        'name' => 'co_encadrant_int_fonction',
        'value' => '',
        'label' => 'Fonction du co-encadrant interne',
        'placeholder' => '',
        'class' => 'validate',
        'icon' => 'person',
        'helper' => 'Fonction du co-encadrant interne',
        'required' => $required,
        'cols' => 4,
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'co_encadrant_int_tel',
    'value' => '',
    'label' => 'Téléphone du co-encadrant interne',
    'placeholder' => '',
    'class' => 'validate',
    'icon' => 'phone',
    'helper' => 'Téléphone du co-encadrant interne',
    'required' => $required,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'co_encadrant_int_mail',
    'value' => '',
    'label' => 'Email du co-encadrant interne',
    'placeholder' => '',
    'class' => 'validate',
    'icon' => 'mail',
    'helper' => 'Email du co-encadrant interne',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>