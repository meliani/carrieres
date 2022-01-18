<div class="card-panel">
    <div class="card-content">
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Mon binôme
            </h4>
        </div>
        <?php
        $required = '';

        ?>
        <div class = "row">
        {{ Form::selectGroup([
            'name' => 'binome_user_id',
            'value' ,
            'label' => 'Binôme',
            'placeholder' ,
            'class' => 'validate',
            'icon' => 'group' ,
            'helper' => 'Ajouter un binôme',
            'required' => $required,
            'cols' => 4,
            'data' => $students
        ], $errors) }}
        </div>
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>