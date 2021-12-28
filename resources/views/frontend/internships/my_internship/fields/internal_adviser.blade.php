<div class = "row">
    {{ Form::selectGroup([
        'name' => 'internal_adviser',
        'value' => null,
        'label' => 'Votre encadrant interne',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'person',
        'helper' => '',
        'required' => 'required',
        'cols' => 12,
        'data' => config('inpt.profs'),
    ], $errors) }}
    </div>