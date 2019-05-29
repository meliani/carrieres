<div class="card-panel">
    <div class="card-content">
        @yield('fields')
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Entreprise</h4>
            <!-- Raison Sociale Field -->
        </div>
        @include('backend.internships.fields.entreprise')

        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Informations sur le stage</h4>
        </div>
        @include('backend.internships.fields.internship')

        <!-- parrain -------------------------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Parrain</h4>
            <h6 class="col s12 light center blue-text text-lighten-1">
                Représentant de l'entreprise</h6>
        </div>
            @include('backend.internships.fields.parrain')

        <!-- Encadrant ext ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Encadrant externe</h4>
        </div>
            @include('backend.internships.fields.encadrant_ext')


        <!-- Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Encadrant interne</h4>
        </div>
        @include('backend.internships.fields.encadrant_int')

        <!-- Co Encadrant int ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Co-encadrant interne (Optionnel)
            </h4>
        </div>
        @include('backend.internships.fields.co_encadrant_int')


        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Si stage a l'étranger
            </h4>
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
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-1 blue lighten-1']) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>