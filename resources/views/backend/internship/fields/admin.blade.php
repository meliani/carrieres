<?php
$required = '';
?>
<div class = "row">
{{ Form::selectGroup([
    'name' => 'classroom_id',
    'value' ,
    'label' => 'Salle',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => '',
    'required' => $required,
    'cols' => 3,
    'data' => ['1'=>'Amphi 1','2'=>'Amphi 2','3'=>'Amphi 3']
], $errors) }}
{{ Form::textGroup([
    'name' => 'date_soutenance',
    'value' ,
    'label' => 'Date de soutenance',
    'placeholder' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de soutenance prevue',
    'required' => $required,
    'cols' => 5,
], $errors) }}
</div>