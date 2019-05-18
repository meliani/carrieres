<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Entreprise
            </h4>

            {{ Form::textGroup([
                'name' => 'intitule',
                'value' => 'kkkk',
                'label' => 'First Name',
                'placeholder' => 'baba',
                'class' => 'validate',
                'icon' => 'home',
                'helper' => 'Nom de l\'entreprise où vous allez passer votre stage',
                'required' => 'required',
            ], $errors) }}
            {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light blue-text text-lighten-1 blue lighten-1']) !!}
