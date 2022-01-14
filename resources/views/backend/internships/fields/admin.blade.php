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
    'data' => config('school.current.defense.rooms')
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
    'label' => 'Heure',
    'placeholder' ,
    'class' => 'timepicker validate',
    'icon' => 'date_range',
    'helper' => 'Heure de debut',
    'required' => $required,
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'defense_end_time',
    'value' ,
    'label' => 'Heure',
    'placeholder' ,
    'class' => 'timepicker validate',
    'icon' => 'date_range',
    'helper' => 'Heure de fin',
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
    'data' => config('school.current.defense.time_slots')
], $errors) }}
</div>