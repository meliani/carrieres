<?php
$required = 'required';
?>
<div class = "row">
{{ Form::textGroup([
    'name' => 'remuneration',
    'value' ,
    'label' => 'Montant en chiffres',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Montant de gratification mensuel',
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
    'label' => 'Nombre d\'Heures par semaine',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Charge horaire (Heures/semaine)',
    'required' => $required,
    'cols' => 3,
], $errors) }}
</div>