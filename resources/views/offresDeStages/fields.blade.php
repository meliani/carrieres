<div class="card-panel">
    <div class="card-content">
        <!-- Nom Responsable Field -->
        <div class = "row">
            <div class = "input-field col s6">
                <i class = "material-icons prefix">account_circle</i>
                {!! Form::label('nom_responsable', 'Nom du responsable:') !!}
                {!! Form::text('nom_responsable', null, ['class' => 'active validate', 'required']) !!}
            </div>

            <!-- Raison Sociale Field -->
            <div class = "input-field col s6">
                {!! Form::label('organization_name', 'Raison sociale:') !!}
                {!! Form::text('organization_name', null, ['class' => 'validate', 'required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Lieu De Stage Field -->
            <div class = "input-field col s6">
                {!! Form::label('lieu_de_stage', 'Lieu de stage:') !!}
                {!! Form::text('lieu_de_stage', null, ['class' => 'validate', 'required']) !!}
            </div>

            <!-- Fonction Field -->
            <div class = "input-field col s6">
                {!! Form::label('fonction', 'Fonction:') !!}
                {!! Form::text('fonction', null, ['class' => 'validate', 'required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Tel Field -->
            <div class = "input-field col s6">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('telephone', 'Téléphone:') !!}
                {!! Form::text('telephone', null, ['class' => 'validate', 'required']) !!}
            </div>

            <!-- Email Field -->
            <div class = "input-field col s6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'validate']) !!}
            </div>
        </div>

        <div class = "row">
            <div class = "input-field col s12">
                <!-- Intitule Sujet Field -->
                <i class = "material-icons prefix">mode_edit</i>
                {!! Form::label('intitule_sujet', 'Intitule du sujet:') !!}
                {!! Form::textarea('intitule_sujet', null, ['class' => 'materialize-textarea']) !!}
            </div>
        </div>

        <div class = "row">
            <!-- Descriptif Field -->
            <div class = "input-field col s12">
                {!! Form::label('description', 'Descriptif de l\'offre / Prérequis:') !!}
                {!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
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
