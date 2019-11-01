<div class="card-panel">
    <div class="card-content">
        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Version papier</h5>
        </div>
        <div class = "row">
            {{ Form::selectGroup([
                'name' => 'paper_report',
                'value' ,
                'label' => 'Rapport',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'Rapport de stage',
                'required',
                'cols' => 3,
                'data' => ['1'=>'Remis','0'=>'Non encore']
            ], $errors) }}
            {{ Form::selectGroup([
                'name' => 'paper_agreement',
                'value' ,
                'label' => 'Convention',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'Convention de stage',
                'required',
                'cols' => 3,
                'data' => ['1'=>'Remis','0'=>'Non encore']
            ], $errors) }}
            {{ Form::selectGroup([
                'name' => 'paper_certificate',
                'value' ,
                'label' => 'Attestation',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => 'Attestation de stage',
                'required',
                'cols' => 3,
                'data' => ['1'=>'Remis','0'=>'Non encore']
            ], $errors) }}
            {{ Form::selectGroup([
                'name' => 'paper_scorecard',
                'value' ,
                'label' => 'Fiche d\'evaluation',
                'placeholder' ,
                'class' => 'validate',
                'icon' ,
                'helper' => '',
                'required',
                'cols' => 3,
                'data' => ['1'=>'Remis','0'=>'Non encore']
            ], $errors) }}
        </div>
        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Informations sur l'entreprise</h5>
        </div>
<div class = "row">
<!-- Text -->
{{ Form::textGroup([
    'name' => 'company_name',
    'value' => $report->company_name,
    'label' => __('form/submit_report/label.company_name'),
    'placeholder' => __('form/submit_report/placeholder.company_name'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.company_name'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}
<!-- Text -->
{{ Form::textGroup([
    'name' => 'company_city',
    'value' => $report->company_city,
    'label' => __('form/submit_report/label.company_city'),
    'placeholder' => __('form/submit_report/placeholder.company_city'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.company_city'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}

<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur le stage</h5>
</div>
<!-- Text -->
{{ Form::textGroup([
    'name' => 'report_title',
    'value' => $report->report_title,
    'label' => __('form/submit_report/label.report_title'),
    'placeholder' => __('form/submit_report/placeholder.report_title'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.report_title'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'project_description',
    'value' => $report->project_description,
    'label' => __('form/submit_report/label.project_description'),
    'placeholder' => __('form/submit_report/placeholder.project_description'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.project_description'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}

{{ Form::textGroup([
    'name' => 'internship_started_at',
    'value' ,
    'label' => __('form/submit_report/label.internship_started_at'),
    'placeholder' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => __('form/submit_report/helper.internship_started_at'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}
{{ Form::textGroup([
    'name' => 'internship_ended_at',
    'value' ,
    'label' => __('form/submit_report/label.internship_ended_at'),
    'placeholder' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => __('form/submit_report/helper.internship_ended_at'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}
<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur le responsable de stage</h5>
</div>
<!-- Text -->
{{ Form::textGroup([
    'name' => 'internship_responsible_name',
    'value',
    'label' => __('form/submit_report/label.internship_responsible_name'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person',
    'helper' => __('form/submit_report/helper.internship_responsible_name'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}
<!-- Text -->
{{ Form::textGroup([
    'name' => 'internship_responsible_position',
    'value' ,
    'label' => __('form/submit_report/label.internship_responsible_position'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.internship_responsible_position'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'internship_responsible_email',
    'value' ,
    'label' => __('form/submit_report/label.internship_responsible_email'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.internship_responsible_email'),
    'required' => 'disabled' ,
    'cols' => 3,
], $errors) }}
<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Documents de stage</h5>
</div>
@include('backend.internships.reports.partials.documents')

<input type="hidden" name="user_id" value={{ user()->id }}>

</div>
    </div>
    <div class="card-action">
        <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Enregistrer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-5 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>  
</div>