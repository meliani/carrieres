<?php
$required = '';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'encadrant_int_titre',
    'value' ,
    'label' => 'Civilité de l\'encadrant interne',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Civilité de l\'encadrant interne',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Mr','0'=>'Mme']
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_int_nom',
    'value' ,
    'label' => 'Nom de l\'encadrant interne',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Nom de l\'encadrant interne',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_int_prenom',
    'value' ,
    'label' => 'Prénom de l\'encadrant interne',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Prénom de l\'encadrant interne',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'encadrant_int_mail',
    'value' ,
    'label' => 'Email de l\'encadrant interne',
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'mail',
    'helper' => 'Email de l\'encadrant interne',
    'required' => $required,
    'cols' => 4,
], $errors) }}
</div>