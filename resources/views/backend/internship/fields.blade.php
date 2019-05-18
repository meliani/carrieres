<div class="card-panel">
    <div class="card-content">
        <!-- Entreprise -------------------------------------------------------->
        <div class = "row">        
            <h4 class="header col s12 light center blue-text text-lighten-1">
                Entreprise
            </h4>

            {{ Form::textGroup([
                'name' => 'firstname',
                'value' => 'kkkk',
                'label' => 'First Name',
                'placeholder' => 'baba',
                'class' => 'validate',
                'icon' => 'home',
                'required',
            ], $errors) }}