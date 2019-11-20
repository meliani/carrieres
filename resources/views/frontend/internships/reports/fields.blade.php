<div class="card-panel">
    <div class="card-content">
        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Informations sur l'entreprise</h5>
        </div>
<div class = "row">
<!-- Text -->
{{ Form::textGroup([
    'name' => 'company_name',
    'value',
    'label' => __('form/submit_report/label.company_name'),
    'placeholder' => __('form/submit_report/placeholder.company_name'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.company_name'),
    'required',
    'cols' => 5,
], $errors) }}
<!-- Text -->
{{ Form::textGroup([
    'name' => 'company_city',
    'value' ,
    'label' => __('form/submit_report/label.company_city'),
    'placeholder' => __('form/submit_report/placeholder.company_city'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.company_city'),
    'required',
    'cols' => 5,
], $errors) }}

<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur vous</h5>
</div>

<!-- Text -->
{{ Form::textGroup([
    'name' => 'student_phone',
    'value' ,
    'label' => __('form/submit_report/label.student_phone'),
    'placeholder' => __('form/submit_report/placeholder.student_phone'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.student_phone'),
    'required',
    'cols' => 5,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'student_email',
    'value' ,
    'label' => __('form/submit_report/label.student_email'),
    'placeholder' => __('form/submit_report/placeholder.student_email'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.student_email'),
    'required',
    'cols' => 5,
], $errors) }}
<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur le stage</h5>
</div>
<!-- Text -->
{{ Form::textGroup([
    'name' => 'report_title',
    'value' ,
    'label' => __('form/submit_report/label.report_title'),
    'placeholder' => __('form/submit_report/placeholder.report_title'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.report_title'),
    'required',
    'cols' => 5,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'project_description',
    'value' ,
    'label' => __('form/submit_report/label.project_description'),
    'placeholder' => __('form/submit_report/placeholder.project_description'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.project_description'),
    'required',
    'cols' => 5,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'project_keywords',
    'value' ,
    'label' => __('form/submit_report/label.project_keywords'),
    'placeholder' => __('form/submit_report/placeholder.project_keywords'),
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/submit_report/helper.project_keywords'),
    'required',
    'cols' => 5,
], $errors) }}
{{ Form::textGroup([
    'name' => 'internship_started_at',
    'value' ,
    'label' => __('form/submit_report/label.internship_started_at'),
    'placeholder' ,
    'class' => 'datepicker validate',
    'icon' => 'date_range',
    'helper' => __('form/submit_report/helper.internship_started_at'),
    'required',
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
    'required',
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
    'required',
    'cols' => 5,
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
    'required' ,
    'cols' => 4,
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
    'required',
    'cols' => 5,
], $errors) }}
<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Documents de stage</h5>
</div>
{{ Form::fileGroup([
    'name' => 'file_report',
    'value' ,
    'label' => __('form/submit_report/label.file_report'),
    'placeholder' ,
    'class' => 'validate',
    'icon',
    'helper' => __('form/submit_report/helper.file_report'),
    'required',
    'position' => 'left',
    'cols' => 5,
], $errors) }}
{{ Form::fileGroup([
    'name' => 'file_agreement',
    'value' ,
    'label' => __('form/submit_report/label.file_agreement'),
    'placeholder' ,
    'class' => 'validate',
    'icon',
    'helper' => __('form/submit_report/helper.file_agreement'),
    'required',
    'position' => 'left',
    'cols' => 5,
], $errors) }}
{{ Form::fileGroup([
    'name' => 'file_certificate',
    'value' ,
    'label' => __('form/submit_report/label.file_certificate'),
    'placeholder' ,
    'class' => 'validate',
    'icon',
    'helper' => __('form/submit_report/helper.file_certificate'),
    'required',
    'position' => 'left',
    'cols' => 5,
], $errors) }}
<input type="hidden" name="user_id" value={{ user()->id }}>
<input type="hidden" name="year_id" value=3>

</div>
    <div class="section">
        <p>
        Dans une deuxième étape, seuls les élèves ingénieurs ayant remis une version électronique pourront remettre le dossier complet de leur stage. 
        Le dossier de stage doit être remis <b>entre le 04 et le 15 Novembre 2019.</b> Il doit être composé de :
        </p>
        <ul>
        <li>1 - Rapport du stage version papier (identique à la version numérique),</li>
        <li>2 - Attestation de stage (copie + originale qui vous sera retournée) ;</li>
        <li>3 - Fiche d’évaluation de l’entreprise (remise sous plis cacheté). Cette fiche peut être transmise par fax ou par mail à entreprise@inpt.ac.ma</li>
        </ul>
        <p>
        Il appartient à l’élève-ingénieur de faire le nécessaire pour que son dossier soit complet lors de la remise du dossier du stage.
        Le non-respect des délais ci-dessus entraine le non validation du stage.
        </p>
    </div>

    </div>
    <div class="card-action">
        <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-5 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>  
</div>