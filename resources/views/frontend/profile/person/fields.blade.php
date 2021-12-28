<div class="card-panel">
    <div class="card-content">
        <div class="row card-title title">
        <h5 class="col m12 center-align">@lang('newlife.activation.fill_required_informations')</h5>
        </div>
        <div class = "row">
            {{ Form::selectGroup([
                'name' => 'gender_id',
                'value' ,
                'label' => 'Civilité',
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'location_searching',
                'helper' => '',
                'required' => 'required',
                'cols' => 6,
                'data' => ['0'=>'Mme','1'=>'M.']
            ], $errors) }}
        </div>
        <div class = "row">

            {{ Form::textGroup([
                'name' => 'email_perso',
                'value' ,
                'label' => __('labels.email_perso'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'contact_mail',
                'required' => 'required',
                'helper' => __('labels.email_perso_helper'),
                'cols' => 5,
            ], $errors) }}

            {{ Form::textGroup([
                'name' => 'phone',
                'value' ,
                'label' => __('labels.phone'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'perm_phone_msg',
                'required' => 'required',
                'helper' => __('labels.phone_helper'),
                'cols' => 5,
            ], $errors) }}
        </div>
        <div class="row">
            @if(user()->people->is_mobility)
            {{ Form::selectGroup([
                'name' => 'abroad_school',
                'value' ,
                'label' => 'Etablissement de mobilité',
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'location_searching',
                'helper' => '',
                'required' => 'required',
                'cols' => 12,
                'data' => config('inpt.abroad_schools'),
            ], $errors) }}
            @endif
        </div>
        <div class = "row">

            <h1 class="col m12 center-align">@lang('newlife.activation.your_cloud_files')</h1>
            {{ Form::textGroup([
                'name' => 'cv',
                'value' ,
                'label' => __('labels.cv'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'featured_video',
                'required' => 'required',
                'helper' => __('labels.cv_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'lm',
                'value' ,
                'label' => __('labels.lm'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'featured_play_list',
                'required' => '',
                'helper' => __('labels.lm_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'photo',
                'value' ,
                'label' => __('labels.photo'),
                'placeholder' ,
                'class' => 'validate',
                'icon' => 'monochrome_photos',
                'required' => 'required',
                'helper' => __('labels.photo_helper'),
                'position' => 'left',
                'cols' => 12,
            ], $errors) }}
            
        </div>  
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Enregistrer', ['class' => "btn waves-effect waves-light white-text blue"]) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-blue btn-flat">Annuler</a>
        </div>
    </div>
</div>
