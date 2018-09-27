<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Autre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_autre', 'Email Autre:') !!}
    {!! Form::text('email_autre', null, ['class' => 'form-control']) !!}
</div>

<!-- Titre Rapport Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('titre_rapport', 'Titre Rapport:') !!}
    {!! Form::textarea('titre_rapport', null, ['class' => 'form-control']) !!}
</div>

<!-- Entreprise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreprise', 'Entreprise:') !!}
    {!! Form::text('entreprise', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville:') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Responsable Stage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_responsable_stage', 'Nom Responsable Stage:') !!}
    {!! Form::text('nom_responsable_stage', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_responsable', 'Email Responsable:') !!}
    {!! Form::text('email_responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Doc Rapport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_rapport', 'Rapport de stage :') !!}
    {!! Form::file('doc_rapport') !!}
</div>
<div class="clearfix"></div>

<!-- Doc Convention Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_convention', 'Convention de stage dûment signée par l\'entreprise, le représentant de l\'INPT et l\'élève ingénieur :') !!}
    {!! Form::file('doc_convention') !!}
</div>
<div class="clearfix"></div>

<!-- Doc Attestation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_attestation', 'Attestation de stage *:') !!}
    {!! Form::file('doc_attestation') !!}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.reportSubmissions.index') !!}" class="btn btn-default">Cancel</a>
</div>
