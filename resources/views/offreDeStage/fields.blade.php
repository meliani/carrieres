<div class="card-panel">
    <div class="card-content">
        <!-- Nom Responsable Field -->
        <div class = "row">
            <div class = "input-field col s6">
            <i class = "material-icons prefix">account_circle</i>
                {!! Form::label('nom_responsable', 'Nom du responsable:') !!}
                {!! Form::text('nom_responsable', null, ['class' => 'active']) !!}
            </div>

        <!-- Raison Sociale Field -->
            <div class = "input-field col s6">
                {!! Form::label('raison_sociale', 'Raison sociale:') !!}
                {!! Form::text('raison_sociale', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Lieu De Stage Field -->
            <div class = "input-field col s6">
                {!! Form::label('lieu_de_stage', 'Lieu de stage:') !!}
                {!! Form::text('lieu_de_stage', null) !!}
            </div>

            <!-- Email Field -->
            <div class = "input-field col s6">
                {!! Form::label('email', 'Email de contact') !!}
                {!! Form::email('email', null, ['class' => 'validate']) !!}
            </div>
        </div>

        <div class = "row">
            <!-- Descriptif Field -->
            <i class = "material-icons prefix">mode_edit</i>
            <div class = "input-field col s12">
            {!! Form::label('descriptif', 'Descriptif de l\'offre / Prérequis:') !!}
            {!! Form::textarea('descriptif', null, ['class' => 'materialize-textarea']) !!}
            </div>
        </div>

        <div class = "row">
            <!-- Mots Cles Field -->
            <div class = "input-field col s6">
            {!! Form::label('mots_cles', 'Mots Clés:') !!}
            {!! Form::text('mots_cles', null) !!}
            </div>
            <!-- Document Offre Field -->
            <div class = "input-field col s6">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Parcourir</span>
                        {!! Form::file('document_offre') !!}
                    </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Ajouter un document">
                </div>
            </div>
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