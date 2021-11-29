<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Entreprise</h4>
            <!-- Raison Sociale Field -->
        </div>
        @include('frontend.internships.my_internship.fields.entreprise')

        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">Informations sur le stage</h4>
        </div>
        @include('frontend.internships.my_internship.fields.internship')

        <!-- parrain -------------------------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Parrain</h4>
            <h6 class="col s12 light center blue-text text-lighten-1">
                Représentant de l'entreprise</h6>
        </div>
            @include('frontend.internships.my_internship.fields.parrain')

        <!-- Encadrant ext ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Encadrant externe</h4>
                <h6 class="col s12 light center blue-text text-lighten-1">
                    Votre encadrant dans l'entreprise</h6>
        </div>
            @include('frontend.internships.my_internship.fields.encadrant_ext')


        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Si stage a l'étranger (Optionnel)
            </h4>
            @include('frontend.internships.my_internship.fields.mobility')
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