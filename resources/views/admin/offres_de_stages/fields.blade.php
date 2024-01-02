<!-- Nom Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_responsable', 'Nom Responsable:') !!}
    {!! Form::text('nom_responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Raison Sociale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organization_name', 'Raison Sociale:') !!}
    {!! Form::text('organization_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Lieu De Stage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieu_de_stage', 'Lieu De Stage:') !!}
    {!! Form::text('lieu_de_stage', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonction', 'Fonction:') !!}
    {!! Form::text('fonction', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Intitule Sujet Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('intitule_sujet', 'Intitule Sujet:') !!}
    {!! Form::textarea('intitule_sujet', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptif Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptif', 'Descriptif:') !!}
    {!! Form::textarea('descriptif', null, ['class' => 'form-control']) !!}
</div>

<!-- Mots Cles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mots_cles', 'Mots Cles:') !!}
    {!! Form::text('mots_cles', null, ['class' => 'form-control']) !!}
</div>

<!-- is valid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_valid', 'Publier l\'offre:') !!}
    {{ Form::select('is_valid', [1 => 'oui', null => 'non'], null, ['class' => 'form-control', 'id' => 'is_valid']) }}
</div>
<!-- status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Archiver :') !!}
    {{ Form::select('status', [-1 => 'oui', null => 'non'], null, ['class' => 'form-control', 'id' => 'status']) }}
</div>
<!-- applyable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('applyable', 'Type candidature :') !!}
    {{ Form::select('applyable', [null => 'A travers carrières', 0 => 'Directe'], null, ['class' => 'form-control', 'id' => 'applyable']) }}
</div>
<!-- expire_at Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expire_at', 'Expire le :') !!}
    {{ Form::date('expire_at', null, ['class' => 'form-control', 'id' => 'applyable']) }}
</div>
<!-- Document Offre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_offre', 'Attacher un document') !!}
    {!! Form::file('document_offre') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.offresDeStages.index') !!}" class="btn btn-default">Cancel</a>
</div>
