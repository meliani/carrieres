
<div class = "input-field col s6">
    <i class="material-icons prefix">{{ array_get($params,'icon') }}</i>
    {!! Form::label(array_get($params,'name'), array_get($params,'label')) !!}
    {!! Form::text(array_get($params,'name'), array_get($params,'value'), 
    ['class' => array_get($params,'class'),
     'placeholder' => array_get($params,'placeholder'),
     'value' => array_get($params,'value'),
     array_get($params,'required'),
    ]
    ) !!}

    <span class="helper-text" 
    {{ $errors->has(array_get($params,'name')?'data-error='.
    $errors->first(array_get($params,'name')):'') }} 
    data-success="Parfait !"
    >
    </span>

</div>