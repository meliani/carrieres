<?php
$type=array_get($params,'type','text');
?>
<div class = "input-field 
    col 
    s{{ array_get($params,'cols',6)*2 }}
    m{{ array_get($params,'cols',6) }}
    l{{ array_get($params,'cols',6)/1.5 }}
    ">
    <i class="material-icons blue-text prefix">{{ array_get($params,'icon') }}</i>

    {!! Form::select(array_get($params,'name'),
    //[ null => array_get($params,'null', null) ] +
    array_get($params,'data')) !!}
    {!! Form::label(array_get($params,'name'), array_get($params,'label')) !!}

    <span class="helper-text" 
    {{ $errors->has(array_get($params,'name')?'data-error='.
    $errors->first(array_get($params,'name')):'') }} 
    data-success="Parfait !">
    {{ array_get($params,'helper') }}
    </span>

</div>