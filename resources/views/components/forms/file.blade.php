<div class = "input-field col 
col 
s{{ array_get($params,'cols',6)*3 }}
m{{ array_get($params,'cols',6) }}
l{{ array_get($params,'cols',6)/1.5 }}
 {{ array_get($params,'position') }}
 ">
        <div class="file-field input-field">
            <div class="btn left blue">
                <span>{{ array_get($params,'label') }}</span>
                {!! Form::file(array_get($params,'name')) !!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" {{ array_get($params,'required') }} type="text" placeholder="Chemin du fichier">
            </div>
        </div>
        <span class="helper-text" 
        {{ $errors->has(array_get($params,'name')?'data-error='.
        $errors->first(array_get($params,'name')):'') }} 
        data-success="Parfait !">
        {{ array_get($params,'helper') }}
        </span>
    </div>

