<div class = "row">
    {{ Form::selectGroup([
        'name' => 'int_adviser_name',
        'value' => null,
        'label' => 'Votre encadrant interne',
        'placeholder' ,
        'class' => 'validate',
        'icon' => 'person',
        'helper' => '',
        'required' => 'required',
        'cols' => 6,
        'data' => config('inpt.profs'),
    ], $errors) }}
    </div>