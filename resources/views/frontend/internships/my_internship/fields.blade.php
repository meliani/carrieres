<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Entreprise</h4>
            <!-- Raison Sociale Field -->
            {{ Form::textGroup([
                'name' => 'raison_sociale',
                'value' => '',
                'label' => 'Raison sociale',
                'placeholder' => '',
                'class' => 'validate',
                'icon' => 'domain',
                'helper' => 'Nom de l\'entreprise où vous allez passer votre stage',
                'required' => 'required',
                'cols' => 6,
            ], $errors) }}
            <!-- Adresse Field -->
            {{ Form::textGroup([
                'name' => 'adresse',
                'value' => '',
                'label' => 'Adresse du stage',
                'placeholder' => '',
                'class' => 'materialize-textarea validate',
                'icon' => 'place',
                'helper' => 'Adresse de l\'entreprise où vous allez passer votre stage',
                'required' => 'required',
                'cols' => 6,
            ], $errors) }}
            </div>

        <div class = "row">
            <!-- Ville Field -->
            {{ Form::textGroup([
                'name' => 'ville',
                'value' => '',
                'label' => 'Ville',
                'placeholder' => '',
                'class' => 'validate',
                'icon' => 'location_city',
                'helper' => 'Ville ou se situe l\'entreprise',
                'required' => 'required',
                'cols' => 4,
            ], $errors) }}
            <!-- Pays Field -->
            {{ Form::textGroup([
                'name' => 'pays',
                'value' => '',
                'label' => 'Pays',
                'placeholder' => '',
                'class' => 'validate',
                'icon' => 'location_city',
                'helper' => 'Pays ou se situe l\'entreprise',
                'required' => 'required',
                'cols' => 4,
            ], $errors) }}
        </div>
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Informations sur le stage</h4>
            {{ Form::textGroup([
                'name' => 'intitule',
                'value' => '',
                'label' => 'Intitule du sujet',
                'placeholder' => '',
                'class' => 'materialize-textarea validate',
                'icon' => 'edit',
                'helper' => '',
                'required' => 'required',
                'cols' => 12,
                'type' => 'textarea',
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'descriptif',
                'value' => '',
                'label' => 'Descriptif détaillé',
                'placeholder' => '',
                'class' => 'materialize-textarea validate',
                'icon' => 'edit',
                'helper' => '',
                'required' => 'required',
                'cols' => 12,
                'type' => 'textarea',
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'keywords',
                'value' => '',
                'label' => 'Mots clés',
                'placeholder' => '',
                'class' => 'materialize-textarea validate',
                'icon' => 'edit',
                'helper' => '',
                'required' => 'required',
                'cols' => 12,
                'type' => 'textarea',
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'date_debut',
                'value' => '',
                'label' => 'Date début',
                'placeholder' => '',
                'class' => 'datepicker validate',
                'icon' => 'date_range',
                'helper' => 'Date de debut de stage',
                'required' => 'required',
                'cols' => 3,
            ], $errors) }}
            {{ Form::textGroup([
                'name' => 'date_fin',
                'value' => '',
                'label' => 'Date fin',
                'placeholder' => '',
                'class' => 'datepicker validate',
                'icon' => 'date_range',
                'helper' => 'Date de fin de stage',
                'required' => 'required',
                'cols' => 3,
            ], $errors) }}
            </div>
        <!-- parrain -------------------------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Parrain</h4>
            <h6 class="col s12 light center blue-text text-lighten-1">Représentant de l'entreprise</h6>

            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="parrain_titre">
                    <option value="1">Mr</option>
                    <option value="2">Mme</option>
                </select>
                <label>Civilité</label>
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('parrain_nom', 'Nom du parrain') !!}
                {!! Form::text('parrain_nom', null) !!}
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('parrain_prenom', 'Prénom du parrain') !!}
                {!! Form::text('parrain_prenom', null) !!}
            </div>
        </div>
        <div class = "row">
            <!-- titre parrain Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('parrain_fonction', 'Fonction du parrain') !!}
                {!! Form::text('parrain_fonction', null) !!}
            </div>
            <!-- telephone Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('parrain_tel', 'Téléphone du parrain') !!}
                {!! Form::text('parrain_tel', null) !!}
            </div>
            <!-- Fonction Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('parrain_mail', 'Mail du parrain') !!}
                {!! Form::text('parrain_mail', null) !!}
            </div>
        </div>

        <!-- Encadrant ext ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Encadrant externe</h4>
            <!-- titre field -->
            <div class = "input-field col m2 s4">
                <select name="encadrant_ext_titre">
                    <option value="1">Mr</option>
                    <option value="2">Mme</option>
                </select>
                <label>Civilité</label>
            </div>
            <!-- Nom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_ext_nom', 'Nom de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_nom', null) !!}
            </div>
            <!-- prenom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_ext_prenom', 'Prénom de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_prenom', null) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Fonction Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('encadrant_ext_fonction', 'Fonction de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_fonction', null) !!}
            </div>
            <!-- Tel Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('encadrant_ext_tel', 'Téléphone de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_tel', null) !!}
            </div>
            <!-- mail Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('encadrant_ext_mail', 'Mail de l\'encadrant externe') !!}
                {!! Form::text('encadrant_ext_mail', null) !!}
            </div>
        </div>

        <!-- Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Encadrant interne</h4>
            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="encadrant_int_titre">
                        <option value="1">Mr</option>
                        <option value="2">Mme</option>
                </select>
                <label>Civilité</label>

            </div>
            <!-- Nom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_int_nom', 'Nom de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_nom', null) !!}
            </div>
            <!-- Prenom Field --> 
            <div class = "input-field col m5 s12">
                {!! Form::label('encadrant_int_prenom', 'Prénom de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_prenom', null) !!}
            </div>
        </div>
        <div class = "row">
            <!-- Fonction Field -->
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">person</i>
                {!! Form::label('encadrant_int_fonction', 'Fonction de l\'encadrant interne') !!}
                {!! Form::text('encadrant_int_fonction', null) !!}
            </div>
            <!-- Tel Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::label('encadrant_int_tel', 'Téléphone du parrain') !!}
                {!! Form::text('encadrant_int_tel', null) !!}
            </div>
            <!-- Mail Field --> 
            <div class = "input-field col m4 s12">
                <i class="material-icons prefix">mail</i>
                {!! Form::label('encadrant_int_mail', 'Mail du parrain') !!}
                {!! Form::text('encadrant_int_mail', null) !!}
            </div>
        </div>
       
        <!-- Co Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Co-encadrant interne (Optionnel)</h4>
            <!-- titre parrain Field -->
            <div class = "input-field col m2 s4">
                <select name="co_encadrant_int_titre">
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
            {!! Form::label('charge', 'Charge horaire Heures/semaine') !!}
            {!! Form::text('charge') !!}
        </div>
        </div>

        <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-1 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>