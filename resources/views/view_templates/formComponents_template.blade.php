<!-- Select -->
{{ Form::selectGroup(
    [
        'name' => __('form.name.first_name'),
        'value',
        'label' => 'Civilité de l\'encadrant interne',
        'placeholder',
        'class' => 'validate',
        'icon',
        'helper' => 'Civilité de l\'encadrant interne',
        'required' => $required,
        'cols' => 3,
        'data' => ['1' => 'Mr', '0' => 'Mme'],
    ],
    $errors,
) }}

<!-- Text -->
{{ Form::textGroup(
    [
        'name' => 'encadrant_int_nom',
        'value',
        'label' => 'Nom de l\'encadrant interne',
        'placeholder',
        'class' => 'validate',
        'icon',
        'helper' => 'Nom de l\'encadrant interne',
        'required' => $required,
        'cols' => 5,
    ],
    $errors,
) }}

<!-- Textarea -->
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

<!-- Checkbox -->
{{ Form::checkboxGroup(
    [
        'name' => 'roles[]',
        'value' => $role->id,
        'label' => $role->name,
        'placeholder',
        'class' => 'validate',
        'icon',
        'helper' => 'Ajouter ou enlever ce droit',
        'required',
        'cols' => 6,
        'data' => $user->roles,
    ],
    $errors,
) }}
