{!! Form::model($person, ['route' => ['person.update', 'id' => user('id')], 'method' => 'patch','files' => true]) !!}

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


{!! Form::close() !!}
