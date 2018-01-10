<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Entreprise</h4>
            <!-- Raison Sociale Field -->
            <div class = "input-field col s6">
                <i class="material-icons prefix">domain</i>
                {!! Form::label('raison_sociale', 'Raison sociale') !!}
                {!! Form::text('raison_sociale', null, ['class' => 'validate','required']) !!}
            </div>
        </div>

        <div class = "row">
                <!-- Adresse Field -->
                <div class = "input-field col s12">
                <i class="material-icons prefix">place</i>
                {!! Form::label('adresse', 'Adresse du stage') !!}
                {!! Form::textarea('adresse', null, ['class' => 'materialize-textarea validate','required']) !!}
                </div>
            </div>

        <div class = "row">

            <!-- Lieu De Stage Field -->
            <div class = "input-field col s6">
                <i class="material-icons prefix">location_city</i>
                {!! Form::label('ville', 'Ville') !!}
                {!! Form::text('ville', null, ['class' => 'validate','required']) !!}
            </div>

            <!-- Fonction Field -->
            <div class = "input-field col s6">
                {!! Form::label('pays', 'Pays') !!}
                {!! Form::text('pays', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
        
        <!-- parrain -------------------------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Parrain</h4>
            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="parrain_titre">
                    <option value="" disabled selected>Civilité</option>
                    <option value="1">Mr</option>
                    <option value="2">Mme</option>
                </select>
                <label>Civilité</label>
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('parrain_nom', 'Nom du parrain') !!}
                {!! Form::text('parrain_nom', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('parrain_prenom', 'Prénom du parrain') !!}
                {!! Form::text('parrain_prenom', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- titre parrain Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('parrain_fonction', 'Fonction du parrain') !!}
                {!! Form::text('parrain_fonction', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- telephone Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('parrain_tel', 'Téléphone du parrain') !!}
                {!! Form::text('parrain_tel', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('parrain_mail', 'Mail du parrain') !!}
                {!! Form::text('parrain_mail', null, ['class' => 'validate','required']) !!}
            </div>
        </div>

        <!-- Encadrant ext ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Encadrant externe</h4>
            <!-- titre field -->
            <div class = "input-field col m2 s4">
                <select name="encadrant_ext_titre">
                    <option value="" disabled selected>Civilité</option>
                    <option value="1">Mr</option>
                    <option value="2">Mme</option>
                </select>
                <label>Civilité</label>
            </div>
            <!-- Nom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_ext_nom', 'Nom de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_nom', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- prenom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_ext_prenom', 'Prénom de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_prenom', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Fonction Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('encadrant_ext_fonction', 'Fonction de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_fonction', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Tel Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('encadrant_ext_tel', 'Téléphone de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_tel', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- mail Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('encadrant_ext_mail', 'Mail de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_mail', null, ['class' => 'validate','required']) !!}
            </div>
        </div>

        <!-- Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Encadrant interne</h4>
            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="encadrant_int_titre">
                        <option value="" disabled selected>Civilité</option>
                        <option value="1">Mr</option>
                        <option value="2">Mme</option>
                </select>
                <label>Civilité</label>

            </div>
            <!-- Nom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_int_nom', 'Nom de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_nom', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Prenom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_int_prenom', 'Prénom de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_prenom', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Fonction Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('encadrant_int_fonction', 'Fonction de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_fonction', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Tel Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('encadrant_int_tel', 'Téléphone du parrain') !!}
                {!! Form::text('encadrant_int_tel', null, ['class' => 'validate','required']) !!}
            </div>
            <!-- Mail Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('encadrant_int_mail', 'Mail du parrain') !!}
                {!! Form::text('encadrant_int_mail', null, ['class' => 'validate','required']) !!}
            </div>
        </div>
       
        <!-- Co Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Co-encadrant interne</h4>
            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="co_encadrant_int_titre">
                        <option value="" disabled selected>Civilité</option>
                        <option value="1">Mr</option>
                        <option value="2">Mme</option>
                </select>
                <label>Civilité</label>

            </div>
            <!-- Nom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('co_encadrant_int_nom', 'Nom') !!}
                {!! Form::text('co_encadrant_int_nom') !!}
            </div>
            <!-- Prenom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('co_encadrant_int_prenom', 'Prénom') !!}
                {!! Form::text('co_encadrant_int_prenom') !!}
            </div>
        </div>
        <div class = "row">
            <!-- Fonction Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('co_encadrant_int_fonction', 'Fonction') !!}
                {!! Form::text('co_encadrant_int_fonction') !!}
            </div>
            <!-- Tel Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('co_encadrant_int_tel', 'Téléphone') !!}
                {!! Form::text('co_encadrant_int_tel') !!}
            </div>
            <!-- Mail Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('co_encadrant_int_mail', 'Email') !!}
                {!! Form::text('co_encadrant_int_mail') !!}
            </div>
        </div>

        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Informations sur le stage</h4>
            <div class = "input-field col s12">
            <!-- Intitule Sujet Field -->
            <i class = "material-icons prefix">mode_edit</i>
                {!! Form::label('intitule_sujet', 'Intitule du sujet:') !!}
                {!! Form::textarea('intitule_sujet', null, ['class' => 'materialize-textarea validate','required']) !!}
            </div>
            <div class = "input-field col s12">
                <!-- Descriptif Field -->
                {!! Form::label('descriptif', 'Descriptif détaillé') !!}
                {!! Form::textarea('descriptif', null, ['class' => 'materialize-textarea validate','required']) !!}
            </div>
            <div class = "input-field col s12">
                <!-- Descriptif Field -->
                {!! Form::label('keywords', 'Mots clés') !!}
                {!! Form::textarea('keywords', null, ['class' => 'materialize-textarea validate','required']) !!}
            </div>
            <div class = "input-field col s6">
                <input type="text" name="date_debut" class="datepicker">
                <label>Date début</label>
            </div>
            <div class = "input-field col s6">
                <input type="text" name="date_fin" class="datepicker">
                <label>Date fin</label>
            </div>
        </div>
        <div class = "row">
        <h4 class="header col s12 light center blue-text text-lighten-1">Si stage a l'étranger</h4>
        <!-- Mail Field --> 
        <div class = "input-field col m4 s12">
            <i class="material-icons prefix">remuneration</i>
            {!! Form::label('remuneration', 'Montant de gratification') !!}
            {!! Form::text('remuneration') !!}
        </div>
        <!-- Mail Field --> 
        <div class = "input-field col m4 s12">
            <i class="material-icons prefix">charge</i>
            {!! Form::label('charge', 'charge horaire') !!}
            {!! Form::text('charge') !!}
        </div>
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