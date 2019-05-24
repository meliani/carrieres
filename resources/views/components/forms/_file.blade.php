<div class="file-field input-field
    col 
    s{{ array_get($params,'cols',6)*3 }}
    m{{ array_get($params,'cols',6) }}
    l{{ array_get($params,'cols',6)/1.5 }}
    ">
    <div class="btn">
        <span>{{ array_get($params,'label') }}</span>
        <span><i class="material-icons white-text">{{ array_get($params,'icon') }}</i></span>
        <input type="file">
    </div>
    <div class="file-path-wrapper">
        
        <input name="{{ array_get($params,'name') }}" class="file-path validate" 
        type="text" placeholder="{{ array_get($params,'label') }}">
    </div>
    <span class="helper-text" 
    {{ $errors->has(array_get($params,'name')?'data-error='.
    $errors->first(array_get($params,'name')):'') }} 
    data-success="Parfait !">
    {{ array_get($params,'helper') }}
    </span>
</div>

