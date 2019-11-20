<!-- Text -->
<div class="card-panel">
    <div class="card-content">
        <div class="row">
{{ Form::open(['route'=>['backend.events.store'],'method'=>'POST']) }}

{{ Form::textGroup([
    'name' => 'name',
    'value' ,
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'slug',
    'value' ,
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'title',
    'value' ,
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'cols' => 4,
], $errors) }}
{{ Form::textGroup([
    'name' => 'details',
    'placeholder' ,
    'class' => 'materialize-textarea validate',
    'icon' => 'edit',
    'helper' ,
    'cols' => 6,
    'type' => 'textarea',
], $errors) }}
{{ Form::textGroup([
    'name' => 'date',
    'value' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'cols' => 3,
], $errors) }}
{{ Form::textGroup([
    'name' => 'time',
    'value' ,
    'class' => 'timepicker validate',
    'icon' => 'alarm_add',
    'cols' => 3,
], $errors) }}
    </div>
    </div>
    <p class="divider"></p>

    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-1 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>
{!! Form::close() !!}
