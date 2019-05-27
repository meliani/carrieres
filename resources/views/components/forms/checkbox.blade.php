<div class = "input-field 
    col 
    s{{ array_get($params,'cols',6)*2 }}
    m{{ array_get($params,'cols',6) }}
    l{{ array_get($params,'cols',6)/1.5 }}
    ">
    <p>
    <label>
    {{ Form::checkbox(array_get($params,'name'), 
    array_get($params,'value'), 
    array_get($params,'data'),
    ['id' => array_get($params,'label')]) }}
    <span>{{ array_get($params,'label') }}</span>
    </label>
    {{-- Form::label(array_get($params,'label'), ucfirst(array_get($params,'label'))) --}}
    </p>
{{--    <span class="helper-text"  
    data-success="Parfait !">
    {{ array_get($params,'helper') }}--}}
    </span>

</div>