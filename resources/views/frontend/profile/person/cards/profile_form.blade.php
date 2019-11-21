
{{ Form::textGroup([
    'name' => 'first_name',
    'value' ,
    'label' => __('labels.first_name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' ,
    'required' => 'required',
    'cols' => 5,
    'inline' => 'inline',
], $errors) }}
{{ Form::textGroup([
    'name' => 'last_name',
    'value' ,
    'label' => __('labels.last_name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' ,
    'required' => 'required',
    'cols' => 5,
    'inline' => 'inline',
], $errors) }}
{{ Form::textGroup([
    'name' => 'filiere_text',
    'value' ,
    'label' => __('labels.stream'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' ,
    'required' => 'required',
    'cols' => 12,
    'inline' => 'inline',
], $errors) }}
