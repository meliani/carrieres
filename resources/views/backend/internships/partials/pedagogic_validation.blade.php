@extends('layouts.ui.app')

@section('title','| mes documents de stage')

@section('users_buttons')
@include(Button::home_button())
@endsection

@section('content')
<div class="container">
    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Validation des sujets</h4>
    </div>
    <div class="row">
        @if(!empty($internship->meta_pedagogic_validation))

        <div class="col s12 m6 l6">
            <div class="card-panel">
                <div class="row center">
                    sujet validé par le chef de filière :
                    <h1 class="light center blue-text text-lighten-1">
                        {{App\Models\Profile\Professor::find($internship->meta_pedagogic_validation['signatures']['professor_id'])->full_name}}
                    </h1>date de validation :
                    <h1 class="light center blue-text text-lighten-1">
                         {{\Carbon\Carbon::parse($internship->meta_pedagogic_validation['dates']['created_at'])->format('d M Y')}}
                    </h1>
                </div>
            </div>
        </div>
        @endif

        <div class="col s12 m6 l6">
            <div class="card-panel">
                <div class="card-content">
                    <span class="card-title">{{$internship->intitule}}</span>
                            <p></p>
                </div>
                <div class="row">
                    {{-- {{
                    Form::model($internship,['route'=>['backend.internhips.pedagogic_validation.update',$internship],'method'
                    =>
                    'PUT']) }} --}}
                    {!! Form::open(['action' => ['Backend\Internship\pedagogicValidationController@update',
                    'internship_id' =>
                    $internship->id], 'method' => 'PUT', 'files' => false]) !!}

                    {{-- {!! Form::open([
                    'wire:submit.prevent' => 'addPedagogicValidation'
                    ]) !!} --}}
                    {{-- 'class'=>'navbar-form navbar-left' ]) !!} --}}
                    {!! Form::textGroup([
                    // 'id' => '#pedagogicValidationDate',
                    'name' => 'pedagogic_validation_date',
                    'label' => __('Click to select date'),
                    // 'value' => $signature_details,
                    'class' => 'datepicker validate',
                    'icon' => 'date_range',
                    // 'wiremodel' => 'pedagogic_validation_date',
                    // 'wirekey' => 'pedagogic_validation_date'.$this->selectedInternship->id,
                    'cols' => 12
                    ], $errors) !!}

                    {{ Form::selectGroup([
                    // 'id' => '#pedagogicValidator',
                    'name' => 'professor_id',
                    'value' ,
                    'label' => 'Coordonateur de filère',
                    'placeholder' ,
                    'class' => 'validate',
                    'icon' => 'person',
                    'helper' => 'Coordonateur de filère',
                    'required',
                    'cols' => 12,
                    'data' => $professors
                    ], $errors) }}
                </div>


                {{-- <button wire:click="sign">signer</button> --}}
                {{-- <button type="submit" href="#!" wire:click="sign({{ $internship->id }})"
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