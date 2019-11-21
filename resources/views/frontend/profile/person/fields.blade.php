<div class="card-panel">
    <div class="card-content">
        <div class = "row">

            {{ Form::textGroup([
                'name' => 'email_perso',
                'value' ,
                'label' => __('labels.email_perso'),
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => __('labels.email_perso_helper'),
                'cols' => 5,
            ], $errors) }}

            {{ Form::textGroup([
                'name' => 'phone',
                'value' ,
                'label' => __('labels.phone'),
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => __('labels.phone_helper'),
                'cols' => 5,
            ], $errors) }}
            <h1 class="col m12 center-align">Fichiers</h1>
            {{ Form::fileGroup([
                'name' => 'cv',
                'value' ,
                'label' => __('labels.cv'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => __('labels.cv_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::fileGroup([
                'name' => 'lm',
                'value' ,
                'label' => __('labels.lm'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => __('labels.lm_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::fileGroup([
                'name' => 'photo',
                'value' ,
                'label' => __('labels.photo'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => __('labels.photo_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            
        </div>  
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => "btn waves-effect waves-light white-text blue"]) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-blue btn-flat">Annuler</a>
        </div>
    </div>
</div>
