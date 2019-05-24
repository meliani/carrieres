<?php
$type=array_get($params,'type','text');
?>
<div class = "input-field {{ array_get($params,'inline') }} 
    col 
    s{{ array_get($params,'cols',6)*3 }}
    m{{ array_get($params,'cols',6) }}
    l{{ array_get($params,'cols',6)/1.5 }}
    ">
    <i class="material-icons blue-text prefix">{{ array_get($params,'icon') }}</i>
    {!! Form::label(array_get($params,'name'), array_get($params,'label')) !!}
    {!! Form::$type(array_get($params,'name'), array_get($params,'value'), 
    ['class' => array_get($params,'class'),
     'placeholder' => array_get($params,'placeholder'),
     'value' => array_get($params,'value'),
     array_get($params,'required'),
    ]
    ) !!}

    <span class="helper-text" 
    {{ $errors->has(array_get($params,'name')?'data-error='.
    $errors->first(array_get($params,'name')):'') }} 
    data-success="Parfait !">
    {{ array_get($params,'helper') }}
    </span>

</div>