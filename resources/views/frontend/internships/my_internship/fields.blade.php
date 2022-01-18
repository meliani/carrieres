<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">Organisme d'accueil</h4>
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
                Représentant de l'organisme d'accueil</h6>
        </div>
            @include('frontend.internships.my_internship.fields.parrain')

        <!-- Encadrant ext ---------------------------------------------------------->
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Encadrant externe</h4>
                <h6 class="col s12 light center blue-text text-lighten-1">
                    Votre encadrant au sein l'organisme d'accueil</h6>
        </div>
            @include('frontend.internships.my_internship.fields.encadrant_ext')

        
        <div class = "row">
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Obligatoire { si stage à l'étranger }
            </h4>
        </div>
           @include('frontend.internships.my_internship.fields.internal_adviser')
            @include('frontend.internships.my_internship.fields.mobility')
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Enregistrer', ['class' => 'btn waves-effect waves-light']) !!}
            {{ Form::submit('Valider et enregistrer', ['class' => "btn waves-effect waves-light white-text green",'formaction' => '/internships?action=validate' , 'hello_test' => 1,'onclick' => "return confirm('Vous ne pourriez plus modifier ces informations après avoir validé votre déclaration de stage.\\n\\nêtes-vous sûr(e) ?');" ]) }}            <a href="{!! route('home') !!}" class="waves-effect waves-teal btn-flat">Annuler</a>
        </div>
    </div>
</div>