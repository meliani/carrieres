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
    'name' => 'defense_at',
    'value' ,
    'label' => 'Date de soutenance',
    'placeholder' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de soutenance prevue',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'defense_start_time',
    'value' ,
    'label' => 'Date de soutenance',
    'placeholder' ,
    'class' => 'timepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de soutenance prevue',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'defense_end_time',
    'value' ,
    'label' => 'Date de soutenance',
    'placeholder' ,
    'class' => 'timepicker validate',
    'icon' => 'date_range',
    'helper' => 'Date de soutenance prevue',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::selectGroup([
    'name' => 'time_slot_id',
    'value' ,
    'label' => 'Créneau',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => '',
    'required' => $required,
    'cols' => 3,
    'data' => [
    '09h00-10h30'=>'09h00-10h30',
    '10h30-12h00'=>'10h30-12h00',
    '14h00-15h30'=>'14h00-15h30',
    '14h30-16h00'=>'14h30-16h00',
    '15h00-16h30'=>'15h00-16h30',
    '15h30-17h00'=>'15h30-17h00',
    '16h00-17h30'=>'16h00-17h30',
    ]
], $errors) }}
</div>