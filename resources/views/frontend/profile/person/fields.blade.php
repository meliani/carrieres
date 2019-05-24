<div class="card-panel">
    <div class="card-content">
        <div class = "row">

            {{ Form::textGroup([
                'name' => 'email_perso',
                'value' ,
                'label' => 'E-mail personnel',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'E-mail personnel pour recevoir les notifications.',
                'required' => 'required',
                'cols' => 5,
            ], $errors) }}

            {{ Form::textGroup([
                'name' => 'phone',
                'value' ,
                'label' => 'Téléphone personnel',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'Telephone portable pour vous contacter d\'urgence',
                'required' => 'required',
                'cols' => 5,
            ], $errors) }}
            <h1 class="col m12 center-align">Fichiers</h1>
            {{ Form::fileGroup([
                'name' => 'cv',
                'value' ,
                'label' => 'CV professionel',
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => 'Attacher votre CV actualise.',
                'required' => 'required',
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::fileGroup([
                'name' => 'lm',
                'value' ,
                'label' => 'Lettre de motivation',
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => 'Attacher une lettre de motivation generale.',
                'required' => 'required',
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::fileGroup([
                'name' => 'photo',
                'value' ,
                'label' => 'CV professionel',
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'person',
                'helper' => 'Attacher une photo recente',
                'required' => 'required',
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
