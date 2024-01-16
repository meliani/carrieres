
{{ Form::textGroup([
    'name' => 'first_name',
    'value' ,
    'label' => __('labels.first_name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'account_circle',
    'helper' ,
    'required' => '',
    'cols' => 4,
    'disabled' => 'disabled',
], $errors) }}
{{ Form::textGroup([
    'name' => 'last_name',
    'value' ,
    'label' => __('labels.last_name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'account_circle',
    'helper' ,
    'required' => 'required',
    'cols' => 4,
    'disabled' => 'disabled',
], $errors) }}
{{ Form::textGroup([
    'name' => 'program',
    'value' ,
    'label' => __('labels.stream'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'books',
    'helper' ,
    'required' => 'required',
    'cols' => 12,
    'disabled' => 'disabled',
], $errors) }}
