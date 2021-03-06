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
    'helper' => 'Nom de l\'entreprise où vous allez passer votre stage',
    'required' => $required,
    'cols' => 4,
], $errors) }}
<!-- Adresse Field -->
{{ Form::textGroup([
    'name' => 'adresse',
    'value' ,
    'label' => 'Adresse du stage',
    'placeholder' ,
    'class' => 'materialize-textarea validate',
    'icon' => 'place',
    'helper' => 'Adresse de l\'entreprise où vous allez passer votre stage',
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
    'helper' => 'Ville ou se situe l\'entreprise',
    'required' => $required,
    'cols' => 2,
], $errors) }}
<!-- Pays Field -->
{{ Form::textGroup([
    'name' => 'pays',
    'value' ,
    'label' => 'Pays',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'location_city',
    'helper' => 'Pays ou se situe l\'entreprise',
    'required' => $required,
    'cols' => 2,
], $errors) }}
</div>