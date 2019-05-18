{{ $errors->has(array_get($params,'name')?'has error':'') }}
<div class = "input-field col s6">
    <i class="material-icons prefix">domain</i>
    {!! Form::label(array_get($params,'name'), array_get($params,'label')) !!}
    {!! Form::text(array_get($params,'name'), null, 
    ['class' => array_get($params,'class'),
    array_get($params,'required'),
     'placeholder' => array_get($params,'placeholder'),
     'value' => array_get($params,'value'),
    ]
    ) !!}
    {{ $errors->first(array_get($params,'name')) }}
</div>