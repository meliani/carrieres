<!-- Select -->
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

<!-- Text -->
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

<!-- Textarea -->
{{ Form::textGroup([
    'name' => 'descriptif',
    'value' ,
    'label' => 'Descriptif détaillé',
    'placeholder' ,
    'class' => 'materialize-textarea validate',
    'icon' => 'edit',
    'helper' ,
    'required' => $required,
    'cols' => 6,
    'type' => 'textarea',
], $errors) }}