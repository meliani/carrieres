<?php
$required = 'required';
?>
<div class = "row">
    {{ Form::textGroup(
        [
            'name' => 'title',
            'value',
            'label' => 'Intitulé du sujet',
            'placeholder',
            'class' => 'materialize-textarea validate',
            'icon' => 'edit',
            'helper',
            'required' => $required,
            'cols' => 6,
            'type' => 'textarea',
        ],
        $errors,
    ) }}
    {{ Form::textGroup(
        [
            'name' => 'description',
            'value',
            'label' => 'Descriptif détaillé',
            'placeholder',
            'class' => 'materialize-textarea validate',
            'icon' => 'edit',
            'helper',
            'required' => $required,
            'cols' => 6,
            'type' => 'textarea',
        ],
        $errors,
    ) }}
    {{ Form::textGroup(
        [
            'name' => 'keywords',
            'value',
            'label' => 'Mots clés',
            'placeholder',
            'class' => 'materialize-textarea validate',
            'icon' => 'edit',
            'helper',
            'required' => $required,
            'cols' => 6,
            'type' => 'textarea',
        ],
        $errors,
    ) }}
    {{ Form::textGroup(
        [
            'name' => 'starting_at',
            'value',
            'label' => 'Date début',
            'placeholder',
            'class' => 'datepicker validate',
            'icon' => 'date_range',
            'helper' => 'Date de début de stage',
            'required' => $required,
            'cols' => 3,
        ],
        $errors,
    ) }}
    {{ Form::textGroup(
        [
            'name' => 'ending_at',
            'value',
            'label' => 'Date fin',
            'placeholder',
            'class' => 'datepicker validate',
            'icon' => 'date_range',
            'helper' => 'Date de fin de stage',
            'required' => $required,
            'cols' => 3,
        ],
        $errors,
    ) }}

    {{ Form::textGroup(
        [
            'name' => 'office_location',
            'value',
            'label' => 'Lieu du stage (adresse précise, si différente de l\'adresse du siège)',
            'placeholder',
            'class' => 'materialize-textarea validate',
            'icon' => 'place',
            'helper' => 'Laisser vide, si la même que l\'adresse du siège',
            'required' => '',
            'cols' => 8,
        ],
        $errors,
    ) }}
</div>
