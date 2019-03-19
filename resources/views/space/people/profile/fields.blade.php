<div class="card-panel">
    <div class="card-content">
        <div class = "row">
            <!--  Field -->
            <div class = "input-field col m5 s12">
                {!! Form::label('email', 'E-mail personnel') !!}
                {!! Form::text('email', null, ['class' => 'validate','required']) !!}
            </div>
            <!--  Field -->
            <div class = "input-field col m5 s12">
                {!! Form::label('phone', 'Téléphone personnel') !!}
                {!! Form::text('phone', null, ['class' => 'validate','required']) !!}
            </div>
            <!--  Field -->
            <div class = "input-field col m5 s12">
                {!! Form::label('birth_date', 'Date de naissance') !!}
                {!! Form::text('birth_date', null, ['class' => 'datepicker','required']) !!}
            </div>

            <!-- Document Field -->
            <div class = "input-field col s12 m9 right">
                <div class="file-field input-field">
                    <div class="btn right blue">
                        <span>Parcourir</span>
                        {!! Form::file('cv') !!}
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" required type="text" placeholder="Mon CV">
                    </div>
                </div>
            </div>

            <!-- Document Field -->
            <div class = "input-field col s12 m9 right">
                <div class="file-field input-field">
                    <div class="right btn blue">
                        <span>Parcourir</span>
                        {!! Form::file('lettre_de_motivation') !!}
                    </div>
                    <div class="file-path-wrapper">
                    <input class="file-path validate" required type="text" placeholder="Lettre de  motivation">
                    </div>
                </div>
            </div>
            <!-- Document Field -->
            <div class = "input-field col s12 m9 right">
                <div class="file-field input-field">
                    <div class="right btn blue">
                        <span>Parcourir</span>
                        {!! Form::file('photo') !!}
                    </div>
                    <div class="file-path-wrapper">
                    <input class="file-path validate" required type="text" placeholder="Photo">
                    </div>
                </div>
            </div>
            
        </div>  
    </div>
    <div class="card-action">
    <!-- Submit Field -->
        <div class = "input-field">
            {!! Form::submit('Envoyer', ['class' => "btn waves-effect waves-light white-text blue"]) !!}
            <a href="{!! route('home') !!}" class="waves-effect waves-blue btn-flat">Annuler</a>
        </div>
    </div>
</div>
{!! Form::close() !!}