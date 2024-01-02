@extends('layouts.ui.app')

@section('title', '| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
    <div class="container">
        <div class="row center">
            <h4 class="header light center blue-text text-lighten-1">Validation de l'encadrant (stage en france)</h4>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="card-panel">
                    <div class="card-content">
                        <span class="card-title">{{ $project->internship->title }}</span>
                        <p>{{ $project->internship->country }}</p>
                    </div>
                    <div class="row">
                        {{-- {{
                    Form::model($project,['route'=>['backend.internhips.pedagogic_validation.update',$project],'method'
                    =>
                    'PUT']) }} --}}
                        {!! Form::open([
                            'action' => ['Backend\Internship\AdviserController@update', 'project_id' => $project->id],
                            'method' => 'PUT',
                            'files' => false,
                        ]) !!}

                        {{-- {!! Form::open([
                    'wire:submit.prevent' => 'addPedagogicValidation'
                    ]) !!} --}}
                        {{-- 'class'=>'navbar-form navbar-left' ]) !!} --}}
                        {!! Form::textGroup(
                            [
                                // 'id' => '#pedagogicValidationDate',
                                'name' => 'advising_validation_date',
                                'label',
                                // 'value' => $signature_details,
                                'class' => 'datepicker validate',
                                'icon' => 'date_range',
                                // 'wiremodel' => 'pedagogic_validation_date',
                                // 'wirekey' => 'pedagogic_validation_date'.$this->selectedInternship->id,
                                'cols' => 12,
                            ],
                            $errors,
                        ) !!}

                        {{ Form::selectGroup(
                            [
                                // 'id' => '#pedagogicValidator',
                                'name' => 'professor_id',
                                'value',
                                'label' => 'Encadrant',
                                'placeholder',
                                'class' => 'validate',
                                'icon' => 'person',
                                'helper' => 'Encadrant',
                                'required',
                                'cols' => 12,
                                'data' => $professors,
                            ],
                            $errors,
                        ) }}
                    </div>


                    {{-- <button wire:click="sign">signer</button> --}}
                    {{-- <button type="submit" href="#!" wire:click="sign({{ $project->id }})"
                    class="modal-close waves-effect waves-green btn-flat">Sign</a> --}}
                    {{-- wire:click.prevent="addPedagogicValidation('{{ json_encode($signature_details) }}')"
                    --}}
                    <div class="card-action">
                        <input type="submit" href="#!" class="waves-effect waves-green btn-flat" name="Valider"
                            value="Valider">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
