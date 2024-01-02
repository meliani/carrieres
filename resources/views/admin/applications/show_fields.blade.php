<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $offresDeStages->id !!}</p>
</div>

<!-- Nom Responsable Field -->
<div class="form-group">
    {!! Form::label('nom_responsable', 'Nom Responsable:') !!}
    <p>{!! $offresDeStages->nom_responsable !!}</p>
</div>

<!-- Raison Sociale Field -->
<div class="form-group">
    {!! Form::label('organization_name', 'Raison Sociale:') !!}
    <p>{!! $offresDeStages->organization_name !!}</p>
</div>

<!-- Lieu De Stage Field -->
<div class="form-group">
    {!! Form::label('lieu_de_stage', 'Lieu De Stage:') !!}
    <p>{!! $offresDeStages->lieu_de_stage !!}</p>
</div>

<!-- Fonction Field -->
<div class="form-group">
    {!! Form::label('fonction', 'Fonction:') !!}
    <p>{!! $offresDeStages->fonction !!}</p>
</div>

<!-- Telephone Field -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
    <p>{!! $offresDeStages->telephone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $offresDeStages->email !!}</p>
</div>

<!-- Intitule Sujet Field -->
<div class="form-group">
    {!! Form::label('intitule_sujet', 'Intitule Sujet:') !!}
    <p>{!! $offresDeStages->intitule_sujet !!}</p>
</div>

<!-- Descriptif Field -->
<div class="form-group">
    {!! Form::label('description', 'Descriptif:') !!}
    <p>{!! $offresDeStages->description !!}</p>
</div>

<!-- Mots Cles Field -->
<div class="form-group">
    {!! Form::label('mots_cles', 'Mots Cles:') !!}
    <p>{!! $offresDeStages->mots_cles !!}</p>
</div>

<!-- Document Offre Field -->
<div class="form-group">
    {!! Form::label('document_offre', 'Document Offre:') !!}
    <p>{!! Html::link(config('offers_storage_path') . $offresDeStages->document_offre) !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $offresDeStages->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $offresDeStages->updated_at !!}</p>
</div>
