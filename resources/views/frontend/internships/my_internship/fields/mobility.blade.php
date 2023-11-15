<?php
$required = '';
?>
<div class = "row">
{{ Form::textGroup([
    'name' => 'remuneration',
    'value' ,
    'label' => 'Montant en chiffres',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Montant de la gratification mensuelle',
    'required' => $required,
    'cols' => 3,
], $errors) }}
    {{ Form::selectGroup([
        'name' => 'currency',
        'value' => null,
        'label' => 'Devise',
        'placeholder' ,
        'class' => 'validate',
        'icon' => '',
        'helper' => '',
        'required' => '',
        'cols' => 3,
        'data' => config('inpt.currencies'),
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'load',
    'value' ,
    'label' => 'Nombre d\'heures par semaine',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'La durée hebdomadaire maximale de présence du stagiaire dans l\'organisme d\'accueil',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>