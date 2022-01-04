<?php
$required = 'required';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'encadrant_ext_titre',
    'value' ,
    'label' => 'Civilité',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => '',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Mr','0'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_nom',
    'value' ,
    'label' => 'Nom',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => '',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_prenom',
    'value' ,
    'label' => 'Prénom',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => '',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>
<div class = "row">
    {{ Form::textGroup([
        'name' => 'encadrant_ext_fonction',
        'value' ,
        'label' => 'Fonction',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'person',
        'helper' => '',
        'required' => $required,
        'cols' => 4,
    ], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_ext_tel',
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
    'name' => 'encadrant_ext_mail',
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