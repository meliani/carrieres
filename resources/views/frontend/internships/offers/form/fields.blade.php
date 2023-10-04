<div class="card-panel">
    {{ Form::open(['route' => ['offers.store'], 'files' => true]) }}

    <div class="card-content">

        <div class="row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                {{ __('Applications') }}</h5>
        </div>
        <div class="row">
            <!-- Text -->
            {{ Form::selectGroup(
                [
                    'name' => 'recruting_type',
                    'value',
                    'label' => __('How you would like to be contacted'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' =>
                        __('The way you want to get applications from our students') .
                        __(' - DASRE*: Direction Adjointe des Stages et Relations Entreprises'),
                    'required',
                    'cols' => 4,
                    'data' => [
                        'external' => __('Direct application'),
                        'internal' =>
                            __('Applications managed and processed by ') .
                            config('school.current.external_relation_entity_name') .
                            '*',
                    ],
                ],
                $errors,
            ) }}
            {{ Form::textGroup(
                [
                    'name' => 'application_email',
                    'value',
                    'label' => __('Application email address'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Application email address if different from your personal one'),
                    'required',
                    'cols' => 4,
                ],
                $errors,
            ) }}
            {{ Form::textGroup(
                [
                    'name' => 'expire_at',
                    'value',
                    'label' => __('Expiration date'),
                    'placeholder',
                    'class' => 'datepicker validate',
                    'icon' => 'date_range',
                    'helper' => '',
                    'required' => '',
                    'cols' => 4,
                ],
                $errors,
            ) }}
        </div>

        <div class="row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                {{ __('Organization Informations') }}</h5>
        </div>
        <div class="row">
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'organization_name',
                    'value',
                    'label' => __('Organization name'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Legal organization name'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}
        </div>
        <div class="row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                {{ __('Your informations') }}</h5>
        </div>
        <div class="row">
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'responsible_fullname',
                    'value',
                    'label' => __('Your full name'),
                    'placeholder',
                    'class' => 'validate',
                    'icon' => 'person',
                    'helper' => __('Your full name please'),
                    'required',
                    'cols' => 8,
                ],
                $errors,
            ) }}
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'responsible_occupation',
                    'value',
                    'label' => __('Position'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Your job title please'),
                    'required',
                    'cols' => 4,
                ],
                $errors,
            ) }}
        </div>
        <div class="row">

            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'responsible_phone',
                    'value',
                    'label' => __('Your phone number'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Your phone in international format please'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}

            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'responsible_email',
                    'value',
                    'label' => __('Your email'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Your email'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}
        </div>
        <div class="row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                {{ __('Internship informations') }}</h5>
        </div>
        <div class="row">
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'internship_location',
                    'value',
                    'label' => __('Internship location adress'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Internship location adress'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'project_title',
                    'value',
                    'label' => __('Project title'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Project title'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}
        </div>
        <div class="row">
            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'project_details',
                    'value',
                    'label' => __('Project details'),
                    'placeholder',
                    'class' => 'materialize-textarea validate',
                    'icon',
                    'helper' => __('Project details'),
                    'required',
                    'type' => 'textarea',
                    'cols' => 5,
                ],
                $errors,
            ) }}

            <!-- Text -->
            {{ Form::textGroup(
                [
                    'name' => 'keywords',
                    'value',
                    'label' => __('Keywords'),
                    'placeholder',
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Enter keywords separated by commas'),
                    'required',
                    'cols' => 5,
                ],
                $errors,
            ) }}
        </div>
        <div class="row">
            {{ Form::fileGroup(
                [
                    'name' => 'attached_file',
                    'value',
                    'label' => __('Attach document'),
                    'placeholder' => __('File path'),
                    'class' => 'validate',
                    'icon',
                    'helper' => __('Add a document to detail this project'),
                    'required',
                    'position' => 'left',
                    'cols' => 5,
                ],
                $errors,
            ) }}
        </div>
    </div>
    <div class="card-action">
        <!-- Submit Field -->
        <div class="input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
            {!! Form::close() !!}

        </div>
    </div>
</div>
