<?php
$required = 'required';
?>
<div class = "row">
{{ Form::textGroup([
    'name' => 'raison_sociale',
    'value' ,
    'label' => 'Raison sociale',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'domain',
    'helper' => 'Nom de l\'organisme d\'accueil',
    'required' => $required,
    'cols' => 4,
], $errors) }}
<!-- Adresse Field -->
{{ Form::textGroup([
    'name' => 'adresse',
    'value' ,
    'label' => 'Adresse du siège social de l\'organisme d\'accueil',
    'placeholder' ,
    'class' => 'materialize-textarea validate',
    'icon' => 'place',
    'helper' => '',
    'required' => $required,
    'cols' => 4,
], $errors) }}

<!-- Ville Field -->
{{ Form::textGroup([
    'name' => 'ville',
    'value' ,
    'label' => 'Ville',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'location_city',
    'helper' => 'Ville où se situe l\'organisme d\'accueil',
    'required' => $required,
    'cols' => 2,
], $errors) }}
<!-- Pays Field -->
{{ Form::selectGroup([
    'name' => 'pays',
    'value' ,
    'label' => 'Pays',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'location_city',
    'helper' => 'Pays où se situe l\'organisme d\'accueil',
    'required' => $required,
    'cols' => 6,
    'data' => config('inpt.countries'),
], $errors) }}
</div>