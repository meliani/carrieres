<div class="card-panel">
    <div class="card-content">

        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Modalités de candidature</h5>
        </div>
        <div class = "row">
        <!-- Text -->
        {{ Form::selectGroup([
            'name' => 'applayable',
            'value' ,
            'label' => __('How you would like to be contacted'),
            'placeholder' ,
            'class' => 'validate',
            'icon' ,
            'helper' => __('The way you want to get applications from our students'),
            'required',
            'cols' => 5,
            'data' => config('inpt.applayable'),
        ], $errors) }}
        {{ Form::textGroup([
            'name' => 'contact_email',
            'value' ,
            'label' => __('Your contact email'),
            'placeholder' ,
            'class' => 'validate',
            'icon' ,
            'helper' => __('Your contact email if different from your personal one'),
            'required',
            'cols' => 5,
        ], $errors) }}
        </div>
        
        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Informations sur votre Entreprise</h5>
        </div>
    <div class = "row">
    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'organization_name',
    'value' ,
    'label' => __('Organization name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('Legal organization name'),
    'required',
    'cols' => 5,
    ], $errors) }}
    </div>
    <div class = "row">
        <h5 class="header col s12 light center blue-text text-lighten-1">
            {{__('Your informations')}}Informations sur vous</h5>
    </div>
    <div class = "row">
    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'responsible_fullname',
    'value' ,
    'label' => __('Your name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person',
    'helper' => __('Your complete name please'),
    'required',
    'cols' => 8,
    ], $errors) }}
    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'responsible_occupation',
    'value' ,
    'label' => __('Position'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('Your job title please'),
    'required' ,
    'cols' => 4,
    ], $errors) }}
    </div>
    <div class = "row">

    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'responsible_phone',
    'value' ,
    'label' => __('Your phone number'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('Your phone in international format please'),
    'required',
    'cols' => 5,
    ], $errors) }}

    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'responsible_email',
    'value' ,
    'label' => __('Your email'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('Your email'),
    'required',
    'cols' => 5,
    ], $errors) }}
    </div>
    <div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur le stage</h5>
    </div>
    <div class = "row">
    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'internship_location',
    'value' ,
    'label' => 'Adresse du stage',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Adresse ou le stage va se passer',
    'required',
    'cols' => 5,
    ], $errors) }}
    <!-- Text -->
    {{ Form::textGroup([
    'name' => 'project_title',
    'value' ,
    'label' => 'Intitulé du stage',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Intitulé du stage',
    'required',
    'cols' => 5,
    ], $errors) }}
    </div>
    <div class = "row">
<!-- Text -->
    {{ Form::textGroup([
    'name' => 'project_detail',
    'value' ,
    'label' => 'Descriptif',
    'placeholder' ,
    'class' => 'materialize-textarea validate',
    'icon' ,
    'helper' => 'Descriptif du sujet du stage',
    'required',
    'type' => 'textarea',
    'cols' => 5,
    ], $errors) }}

<!-- Text -->
    {{ Form::textGroup([
    'name' => 'keywords',
    'value' ,
    'label' => __('form/label.mots_cles'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/helper.mots_cles'),
    'required',
    'cols' => 5,
    ], $errors) }}
    </div>
    <div class = "row">
    {{ Form::fileGroup([
    'name' => 'attached_file',
    'value' ,
    'label' => __('form/label.document_offre'),
    'placeholder' ,
    'class' => 'validate',
    'icon',
    'helper' => __('form/helper.document_offre'),
    'required',
    'position' => 'left',
    'cols' => 5,
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