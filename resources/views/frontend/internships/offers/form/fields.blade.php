<div class="card-panel">
    <div class="card-content">
        <div class = "row">
            <h5 class="header col s12 light center blue-text text-lighten-1">
                Informations sur votre Entreprise</h5>
        </div>
<div class = "row">
<!-- Text -->
{{ Form::textGroup([
    'name' => 'raison_sociale',
    'value' ,
    'label' => __('form/label.raison_sociale'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/helper.raison_sociale'),
    'required',
    'cols' => 5,
], $errors) }}

<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur vous</h5>
</div>
<!-- Text -->
{{ Form::textGroup([
    'name' => 'nom_responsable',
    'value' ,
    'label' => __('form/label.nom_responsable'),
    'placeholder' ,
    'class' => 'validate',
    'icon' => 'person',
    'helper' => __('form/helper.nom_responsable'),
    'required',
    'cols' => 8,
], $errors) }}
<!-- Text -->
{{ Form::textGroup([
    'name' => 'fonction',
    'value' ,
    'label' => 'Fonction',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Votre fontion',
    'required' ,
    'cols' => 4,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'telephone',
    'value' ,
    'label' => 'Telephone',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Votre numero de telephone',
    'required',
    'cols' => 5,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'email',
    'value' ,
    'label' => 'Email',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Votre email',
    'required',
    'cols' => 5,
], $errors) }}
<div class = "row">
    <h5 class="header col s12 light center blue-text text-lighten-1">
        Informations sur le stage</h5>
</div>
<!-- Text -->
{{ Form::textGroup([
    'name' => 'lieu_de_stage',
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
    'name' => 'intitule_sujet',
    'value' ,
    'label' => 'Intitulé du stage',
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => 'Intitulé du stage',
    'required',
    'cols' => 5,
], $errors) }}

<!-- Text -->
{{ Form::textGroup([
    'name' => 'descriptif',
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
    'name' => 'mots_cles',
    'value' ,
    'label' => __('form/label.mots_cles'),
    'placeholder' ,
    'class' => 'validate',
    'icon' ,
    'helper' => __('form/helper.mots_cles'),
    'required',
    'cols' => 5,
], $errors) }}

{{ Form::fileGroup([
    'name' => 'document_offre',
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
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-1 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>  
</div>