<?php
$required = 'required';
?>
<div class = "row">
{{ Form::textGroup([
    'name' => 'remuneration',
    'value' ,
    'label' => 'Montant avec le symbole de la devise',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Montant de gratification mensuel',
    'required' => $required,
    'cols' => 5,
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
    'cols' => 5,
], $errors) }}
</div>