<!-- titre parrain Field -->
<div class="form-group col-sm-6">
    <label>Type de stage (*)</label>
    <select class="form-control form-control-sm" name="type_stage">
        <option value="stage ouvrier">Stage ouvrier</option>
        <option value="stage technique">Stage technique</option>
    </select>
</div>
<div class="clearfix"></div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom (*) :') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom (*) :') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_inpt', 'Email INPT :') !!}
    {!! Form::text('email_inpt', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Email Autre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_autre', 'Email Autre (*) :') !!}
    {!! Form::text('email_autre', null, ['class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>

<!-- tel Autre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Téléphone (*) :') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Titre Rapport Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('titre_rapport', 'Titre Rapport (*) :') !!}
    {!! Form::textarea('titre_rapport', null, ['class' => 'form-control']) !!}
</div>

<!-- Entreprise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreprise', 'Entreprise (*) :') !!}
    {!! Form::text('entreprise', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'Ville (*) :') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>



<!-- Nom Responsable Stage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_responsable_stage', 'Nom Responsable Stage (*) :') !!}
    {!! Form::text('nom_responsable_stage', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_responsable', 'Email Responsable (optionnel) :') !!}
    {!! Form::text('email_responsable', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>


<div class='col-sm-6'>
    <div class='col-sm-6'>
        <div class="form-group">
            <label>Date de début (*) :</label>
            <div class='input-group date' id='starting_at'>
                <input type='text' name='starting_at' class="form-control" placeholder='AAAA-MM-JJ' />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('.date').datetimepicker();
        });
    </script>

    <div class='col-sm-6'>
        <div class="form-group">
            <label>Date de fin (*) :</label>
            <div class='input-group date' id='ending_at'>
                <input type='text' name='ending_at' class="form-control" placeholder='AAAA-MM-JJ' />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#ending_at').datetimepicker();
        });
    </script>
</div>

<div class="clearfix"></div>

<!-- Doc Rapport Field -->
<div class="form-group col-sm-4">
    {!! Form::label('doc_rapport', 'Rapport de stage (*) :') !!}
    {!! Form::file('doc_rapport') !!}
</div>
<!-- Doc Convention Field -->
<div class="form-group col-sm-4">
    {!! Form::label(
        'doc_convention',
        'Convention de stage dûment signée par l\'entreprise, le représentant de l\'INPT et l\'élève ingénieur (*) :',
    ) !!}
    {!! Form::file('doc_convention') !!}
</div>
<!-- Doc Attestation Field -->
<div class="form-group col-sm-4">
    {!! Form::label('doc_attestation', 'Attestation de stage (*) :') !!}
    {!! Form::file('doc_attestation') !!}
</div>
<div class="clearfix"></div>
<div class="form-group col-sm-12">
    <p>
        Dans une deuxième étape, seuls les élèves ingénieurs ayant remis une version électronique pourront remettre le
        dossier complet de leur stage.
        Le dossier de stage doit être remis avant le <b>Jeudi 15 Novembre 2018 à 15H00.</b> Il doit être composé de :
    </p>
    <ul>
        <li>Rapport du stage version papier (identique à la version numérique),</li>
        <li>Attestation de stage (copie + originale qui vous sera retournée) ;</li>
        <li>Fiche d’évaluation de l’entreprise (remise sous plis cacheté). Cette fiche peut être transmise par fax ou
            par mail à entreprise@inpt.ac.ma</li>
    </ul>
    <p>
        Il appartient à l’élève-ingénieur de faire le nécessaire pour que son dossier soit complet lors de la remise du
        dossier du stage.
        Le non-respect des délais ci-dessus entraine le non validation du stage.
    </p>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Valider mes informations', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.reportSubmissions.create') !!}" class="btn btn-default">Annuler</a>
</div>
