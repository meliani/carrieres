<?php
$required = 'required';
?>
<div class = "row">
{{ Form::textGroup([
    'name' => 'intitule',
    'value' => '',
    'label' => 'Intitule du sujet',
    'placeholder' => '',
    'class' => 'materialize-textarea validate',
    'icon' => 'edit',
    'helper' => '',
    'required' => $required,
    'cols' => 6,
    'type' => 'textarea',
], $errors) }}
{{ Form::textGroup([
    'name' => 'descriptif',
    'value' => '',
    'label' => 'Descriptif détaillé',
    'placeholder' => '',
    'class' => 'materialize-textarea validate',
    'icon' => 'edit',
    'helper' => '',
    'required' => $required,
    'cols' => 6,
    'type' => 'textarea',
], $errors) }}
{{ Form::textGroup([
    'name' => 'keywords',
    'value' => '',
    'label' => 'Mots clés',
    'placeholder' => '',
    'class' => 'materialize-textarea validate',
    'icon' => 'edit',
    'helper' => '',
    'required' => $required,
    'cols' => 6,
    'type' => 'textarea',
], $errors) }}
{{ Form::textGroup([
    'name' => 'date_debut',
    'value' => '',
    'label' => 'Date début',
    'placeholder' => '',
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de debut de stage',
    'required' => $required,
    'cols' => 3,
], $errors) }}
{{ Form::textGroup([
    'name' => 'date_fin',
    'value' => '',
    'label' => 'Date fin',
    'placeholder' => '',
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de fin de stage',
    'required' => $required,
    'cols' => 3,
], $errors) }}
</div>