<?php
$required = 'required';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'encadrant_ext_titre',
    'value' ,
    'label' => 'Civilité de l\'encadrant externe',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Civilité de l\'encadrant externe',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Mr','0'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_nom',
    'value' ,
    'label' => 'Nom de l\'encadrant externe',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Nom de l\'encadrant externe',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_prenom',
    'value' ,
    'label' => 'Prénom de l\'encadrant externe',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Prénom de l\'encadrant externe',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>
<div class = "row">
    {{ Form::textGroup([
        'name' => 'encadrant_ext_fonction',
        'value' ,
        'label' => 'Fonction de l\'encadrant externe',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'person',
        'helper' => 'Fonction de l\'encadrant externe',
        'required' => $required,
        'cols' => 4,
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_tel',
    'value' ,
    'label' => 'Téléphone de l\'encadrant externe',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'phone',
    'helper' => 'Téléphone de l\'encadrant externe',
    'required' => $required,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_mail',
    'value' ,
    'label' => 'Email de l\'encadrant externe',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'mail',
    'helper' => 'Email de l\'encadrant externe',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>